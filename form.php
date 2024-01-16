<?php

//print_r($_POST);
echo "<hr>";
//exit;
$dbHost = "localhost";
$dbUsername = "ooredoo";
$dbPassword = "ooredoo07104844";
$dbname = "asterisk";

$dbUsername = "root";
$dbPassword = "vicidialnow";


	$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword,$dbname);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
		 echo "Echec lors de la connexion à MySQL  : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
foreach($_POST as $key=>$val)
{
//	echo $key.";";
$$key=str_replace(array("'","&#65533;","&#65533;","&#65533;"),array("\'","e","e","a"),$mysqli->real_escape_string($val));
if ($key=="Argumentaire3"){;
$raison_refus_offre=str_replace(array("'","&#65533;","&#65533;","&#65533;"),array("\'","e","e","a"),$mysqli->real_escape_string(implode("|",$_POST["Argumentaire3"])));
};

if ($key=="Autre"){;
$raison_refus_offre_autre=str_replace(array("'","&#65533;","&#65533;","&#65533;"),array("\'","e","e","a"),$mysqli->real_escape_string($_POST["Autre"]));
};

if ($key=="autresim"){;
$autresim=$mysqli->real_escape_string(implode("|",str_replace(array("'","&#65533;","&#65533;","&#65533;"),array("\'","e","e","a"),$_POST["autresim"])));
};

if (is_array($val)){;
      $$key=$mysqli->real_escape_string(implode("|",str_replace(array("'","&#65533;","&#65533;","&#65533;"),array("\'","e","e","a"),$val)));
     };
  
  
};
$c1data = array( "1" => "le client a achete le forfait et est un client Gold Jdida ou Dima Ooredoo",
                "2" => "le client a achete le forfait et est un client Autres tarifs plans",
                "3" => "le client n\'a pas achete le forfait" );
$Offre_dima_goldJdida='NON';
if ($c1==1){;
  $Offre_dima_goldJdida='OUI';    
      
     };
$Forfait_Achete=$c1data[$c1];


$Forfait_Achete='OUI';
if ($c1==2){;
  $Forfait_Achete='OUI';    
      
     };

$annee_de_naissance=$Pouvez_vous_me_donner_votre_annee_de_naissance;
$genre=$GENRE;
$situation_individuelle=$Votre_situation_individuelle;
$situation_individuelle_autre=$Autre_situation_individuelle;
$Wilaya=$Dans_quelle_Wilaya_residez_vous;
if (is_array($RaisonduchoixOoredoo)){;
$RaisonduchoixOoredoo=implode("|",$RaisonduchoixOoredoo);
};

if (is_array($RaisonduchoixOoredoo)){;
$RaisonduchoixMobilis=implode("|",$RaisonduchoixMobilis);
};

if (is_array($RaisonduchoixDjezzy)){;
$RaisonduchoixDjezzy=implode("|",$RaisonduchoixDjezzy);
};


//echo "<hr>";

$query = "
INSERT INTO `asterisk`.`fidelite1000` (
`vendor_lead_code` ,
`agent_log_id` ,
`call_id` ,
`uniqueid` ,
`nom` ,
`prenom` ,
`Offre_dima_goldJdida`,
`Forfait_Achete`,
`Q1_activerFidelite`,
`Q2_activerFidelite`,
`Q3` ,
`Q4` ,
`Q5` ,
`Q5_autres` ,
`autresim` ,
`OffreOoredoo` ,
`AutreOffreOoredoo` ,
`RaisonduchoixOoredoo` ,
`RaisonduchoixOoredooAutres` ,
`OffreMobilis` ,
`AutreOffreMobilis` ,
`RaisonduchoixMobilis` ,
`RaisonduchoixMobilisAutres` ,
`OffreDjezzy` ,
`AutreOffreDjezzy` ,
`RaisonduchoixDjezzy` ,
`RaisonduchoixDjezzyAutres` ,
`Age` ,
`Genre` ,
`situation_individuelle` ,
`situation_individuelle_autre` ,
`Wilaya`,
`lead_id`,
`list_id`
)
VALUES (
'$vendor_lead_code', '$agent_log_id', '$call_id', '$uniqueid', '$nom', '$prenom', '$Offre_dima_goldJdida','$Forfait_Achete', '$Q1_activerFidelite','$Q2_activerFidelite',
'$Q3','$Q4','$Q5', '$Q5_autres', '$autresim', '$OffreOoredoo', '$AutreOffreOoredoo', '$RaisonduchoixOoredoo', '$RaisonduchoixOoredooAutres', '$OffreMobilis', '$AutreOffreMobilis', '$RaisonduchoixMobilis', '$RaisonduchoixMobilisAutres', '$OffreDjezzy', '$AutreOffreDjezzy', '$RaisonduchoixDjezzy', '$RaisonduchoixDjezzyAutres',  '$annee_de_naissance', '$genre', '$situation_individuelle', '$situation_individuelle_autre', '$Wilaya','$lead_id','$list_id'
);";
 //echo "<br>".$query."<hr>";
//print_r($_POST);
//exit;
$res = $mysqli->query($query)
or die(mysqli_error($mysqli)); 
?>
<h1>Merci</h1>
<?php echo '<img src="smile1.png" alt="smile">'; ?>




