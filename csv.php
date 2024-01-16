<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$statuses = array();
$statuses["CBHOLD"] = "Rappel";
//print_r($_POST);
//echo "<hr>";
$dbHost = "localhost";
$dbUsername = "ooredoo";
$dbPassword = "ooredoo07104844";
$dbname = "asterisk";

$dbUsername = "root";
$dbPassword = "vicidialnow";


$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbname);
$mysqli->set_charset("utf8");
if ($mysqli->connect_errno) {
     echo "Echec lors de la connexion a  MySQL  : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$sql = "SELECT status, status_name FROM vicidial_statuses";
$res = $mysqli->query($sql)
     or die(mysqli_error($mysqli));
while ($row = $res->fetch_assoc()) {;
     $n = $row["status_name"];
     $s = $row["status"];
     $statuses[$s] = $n;
};
$sql = "SELECT status, status_name FROM vicidial_campaign_statuses";
$res = $mysqli->query($sql)
     or die(mysqli_error($mysqli));
while ($row = $res->fetch_assoc()) {;
     $n = $row["status_name"];
     $s = $row["status"];
     $statuses[$s] = $n;
};

$sqldate = "";
$datexp = "all";
if (isset($_GET["date"]) && $_GET["date"] != "") {;
     if (!isset($_GET["date1"])) {;
          $_GET["date1"] = $_GET["date"];
     };
     $datexp = $_GET["date"];
     $sqldate = "AND c.last_local_call_time BETWEEN '" . $_GET["date"] . " 00:00:00' AND '" . $_GET["date1"] . " 23:59:59'";
};

$sql = "SELECT 
b.start_time as call_time,
b.end_time as call_end,
b.length_in_sec as Duree_appel, 
b.number_dialed as contact_info,
d.user as Agent_name,
a.Offre_Yooz,
a.Forfait_Achete,
a.avis_satisfaction,
a.satisfaction,
a.Q1_activerFidelite,
a.Q2_activerFidelite,
a.Q3,
a.Q4,
a.Q5,
a.Q5_autres,
a.autresim as Utilisation_autre_sim, 
a.OffreOoredoo as Rep2_old_sim_ooredoo_offre, 
a.AutreOffreOoredoo as Rep2_old_sim_ooredoo_autre_offre, 
a.RaisonduchoixOoredoo as Rep2_old_sim_ooredoo_raison, 
a.RaisonduchoixOoredooAutres as Rep2_old_sim_ooredoo_autre_raison, 
a.OffreMobilis as Rep2_old_sim_mobilis_offre, 
a.AutreOffreMobilis as Rep2_old_sim_mobilis_autre_offre, 
a.RaisonduchoixMobilis as Rep2_old_sim_mobilis_raison, 
a.RaisonduchoixMobilisAutres as Rep2_old_sim_mobilis_autre_raison, 
a.OffreDjezzy as Rep2_old_sim_djezzy_offre, 
a.AutreOffreDjezzy as Rep2_old_sim_djezzy_autre_offre, 
a.RaisonduchoixDjezzy as Rep2_old_sim_djezzy_raison, 
a.RaisonduchoixDjezzyAutres as Rep2_old_sim_djezzy_autre_raison, 
a.Age as Age, 
a.Genre as Genre, 
a.situation_individuelle as Situation_individuelle, 
a.situation_individuelle_autre as Situation_individuelle_autre, 
a.Wilaya as Wilaya_de_residence,
c.status as Qualification,
c.comments as commentaire
FROM fidelite1001 a, call_log b, vicidial_list c, vicidial_agent_log d, vicidial_statuses e /*, vicidial_campaign_statuses f*/  WHERE a.call_id=b.caller_code  AND c.lead_id=a.lead_id AND a.agent_log_id=d.agent_log_id 
AND b.caller_code LIKE 'V%' /* AND f.status=c.status */ $sqldate GROUP BY call_id";
//$sql="SELECT a.*,b.*  FROM goldjdida a, call_log b WHERE a.call_id=b.caller_code ";
if (isset($_GET["verbose"])) {;
     echo "<br> $sql <br><hr><br>";
     exit;
};
$res = $mysqli->query($sql)
     or die(mysqli_error($mysqli));
if (!isset($_GET["mode"]) && $_GET["mode"] != "json") {;
     echo "<br> $sql <br><hr><br>";
     echo "<br> $res <br><hr><br>";
     //                                                  exit;
};

$i = 0;
$entetes = array();
$lines = array();
if (mysqli_num_rows($res) == 0) {;

     header("location:export.php?error=noresult");
};
//echo $sql;
//exit;
echo "Before headers<br>";

if (!isset($_GET["mode"]) || $_GET["mode"] !== "json") {
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=export_ooredoo_" . $datexp . ".csv");
    header("Pragma: no-cache");
    header("Expires: 0");
    echo implode(";", $entetes) . "\n";
}

while ($row = $res->fetch_assoc()) {
    if ($i == 0) {
        foreach ($row as $key => $val) {
            $entetes[] = $key;
        }
        if (!isset($_GET["mode"]) || $_GET["mode"] !== "json") {
            echo implode(";", $entetes) . "\n";
        }
    }

    if (!isset($_GET["mode"]) || $_GET["mode"] !== "json") {
        $q = $row["Qualification"];
        $row["contact_info"] = substr($row["contact_info"], 1);
        $row["Qualification"] = $statuses[$q];
        echo implode(";", $row) . "\n";
    }

    $lines[] = $row;
    $i++;
}

if (isset($_GET["mode"]) && $_GET["mode"] == "json") {;
     header('Content-Type: application/json');
     echo $sql . "<hr>";
     echo json_encode($lines);
};
