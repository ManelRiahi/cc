<?php
$dateend = "23/02/2024";

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Gold Jdida</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<body class=" p-4">
    <div class="row">
        <div class="col-12 text-center"><img src="logo.png">
            <h1 class="text-primary"> Gold Jdida </h1>
        </div>
    </div>

    <form method="POST" action="form.php" id="form">


        <div id="div0" class="card card-body m-2">

            <h2>Conseiller : Bonjour Mme, M, Je me pr�sente, je suis Mme, Melle, M. Xxxxxxxxx, de la soci�t� Ooredoo Puis-je prendre un peu de votre temps pour vous parler des nouveaut�s Ooredoo. Auriez-vous quelques minutes � m'accorder ?</h2>

            <h4 class="text-primary">
                Auriez-vous quelques minutes � m'accorder ?
            </h4>
            </br> </br>
            <div class="row">
                <div class="col-12 text-center">

                    <button type="button" class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light" id="1_OUI">OUI</button>
                    <button type="button" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light" id="1_NON" data-toggle="modal" data-target="#small" data-dashlane-rid="f593a73167c79577" data-form-type="other" data-dashlane-label="true">NON</button>
                </div>
            </div>
        </div>
        </div>


        <div id="script2RDV" class="card card-body m-2 ds-none">

            <h2 class="card-title"> Puis-je avoir une date et une heure � votre convenance ?</h2>
            <h3 class="danger"><b>Noter la date et l'heure </b></h3>
            <h3><span class="text-info">Prise de conge :</span></h3>
            <h4>Nous vous remercions Mme/M d'avoir choisi
                Ooredoo.</h4>
            <h4>Nous vous souhaitons une excellente journee.
            </h4>
            <b>Pour plus d informations, contactez le service client <span class="text-warning"> au 333 </span>, disponible </b>
            <p class="warning"><b>7j/7 et 24h/24.</b> <br><br>
            </p>
            <h4> <b class="text-primary">A bientot</b> </h4><br><br>
        </div>

        <div class="row">
            <div class="col-12 text-center"><button type="button" id="btnValidNone" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light" data-dashlane-rid="ba94740fb372eaea">Valider</button></div>
        </div>

        </div>
        <div id="C1DIV" class="card card-body m-2" style="display: none;">

            <p class="d-none">Vous �tes bien M/Mme <?php echo $_GET["prenom"]; ?> <?php echo $_GET["nom"]; ?> </p>
            <div class="alert alert-success" role="alert">
                <p> Vérifier sur Mahraba l'offre du client !</p>
            </div>
            <div class="form-group">
                <h4 class="text-primary">Le client est sur loffre Dima Ooredoo ou sur loffre YOOZ ?</h4>
                <div class="row">
                    <div class="col-12 text-center">

                        <button type="button" class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light" id="22_OUI">OUI</button>
                        <button type="button" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light" id="22_NON" data-toggle="modal" data-target="#small" data-dashlane-rid="f593a73167c79577" data-form-type="other" data-dashlane-label="true">NON</button>
                    </div>


                </div>

            </div>
        </div>

        <div id="script5" class="card card-body m-2" style="">

            <h2><b>
                    <h4 class="text-primary">le client est sur une autre offre ?</h4>
                    <div class="row">
                        <div class="col-12 text-center">

                            <button type="button" class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light" id="2_NON" data-dashlane-rid="81b6a13effa23ccb" data-dashlane-label="true" data-form-type="action">OUI</button>
                            <button type="button" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light" id="2_OUI" data-toggle="modal" data-target="#small" data-dashlane-rid="15fff234b97ccdba" data-form-type="other" data-dashlane-label="true">NON</button>
                        </div>


                    </div>

                    <div class="m-2 h3 text-danger" id="script2cl" style=""> le client est sur une autre <b>offre</b> faire une simple
                        identification et clôturer l'appel !</div>


        </div>
        </div>

        <!-- Start script 0 -->
        <div id="script3" class="card card-body m-2" style="display: none;">
            <span>
                <p>M, Mme Xxxxx, Ooredoo est honor� de vous compter parmi ses clients fid�les. </p>
                <p>Soucieuse de vous proposer le meilleur, Ooredoo r�compense aujourd�hui votre fid�lit� en vous donnant la possibilit� de changer gratuitement, vers la nouvelle offre � La Gold Jdida �.</p>
            </span>
            <p>L'offre La <span class="text-danger">Gold Jdida</span> propose trois forfaits :</p>
            <p>
                <strong>
                    <b>Le forfait mensuel <span class="text-danger">Gold Jdida 1000 </span>
                    </b>,
                </strong> pour 1000 DA vous avez : Durant les 3 premiers mois
                <br>
                <span class="warning">
                    12Go
                </span>
                des <span class="text-success">appels illimités</span> vers Ooredoo <span class="warning">2000Da</span> de crédit. Après 3 mois le forfait internet passe à <span class="text-info">8 Go</span>.
            </p>
            <p><strong><b>Le forfait mensuel <span class="text-danger">Gold Jdida 1500</span></b>,</strong>pour 1500 DA vous
                avez : Durant les 3 premiers mois<br>
                <span class="warning">40Go</span> des <span class="text-success">appels
                    illimités</span> vers Ooredoo <span class="warning">3000Da </span> de crédit. Après 3 mois
                le forfait internet passe à <span class="text-info">20 Go</span>.
            </p>
            <p><strong><b>Le forfait mensuel <span class="text-danger">Gold Jdida 2000</span></b>,</strong> pour 2000 DA vous
                avez : Durant les 3 premiers mois<br>
                <span class="bg-info"> 60Go (le volume internet reste inchangé même après 3 mois) des
                </span>
                <span class="text-success">appels illimités

                </span> vers Ooredoo
                <span class="warning">5000Da de crédit.</span>
            </p>
            <p>Sachez M/Mme que cette nouveaut� vous donnera aussi la possibilit� de choisir et d�acheter le forfait qui vous convient parmi une large gamme de forfaits mensuels et journaliers.</p>
            <p>Vous pouvez aussi renouveler automatiquement votre forfait � son expiration � condition d�avoir suffisamment de cr�dit, ainsi que convertir votre forfait en cr�dit recharge ou en un autre forfait Gold Jdida.</p>
            <h5> Souhaitez-vous que je vous assiste en ligne afin de changer vers La Gold Jdida, pour profiter de tous ces avantages lors de vos prochains rechargements ? </h5>

            <div class="row">
                <div class="col-sm-3">
                    <!-- select -->
                    <div class="form-group ml-4 pl-4">
                        <select class="form-control" id="assistance" name="assistance">
                            <option value="">--- Votre Choix ---</option>
                            <option value="Oui">OUI</option>
                            <option value="Non">NON</option>
                            <option value="deja effectue">Déja éffectué</option>
                        </select>
                    </div>
                    <div class="col-12 text-center d-none">

                        <button type="button" class="btn btn-success mr-2 text-bold" id="3_OUI">OUI</button>
                        <button type="button" class="btn btn-danger mr-2 text-bold" id="3_NON">NON</button>
                        <button type="button" class="btn btn-warning mr-2 text-bold" id="3_EFFECTUE" style="text-transform: uppercase;">Déjà&nbsp; effectué</button>

                    </div>
                </div>

            </div> <!-- end script 0 -->


        </div>
        <div id="argu1" class="card card-body m-2" style="display: none;">
            <div class="alert alert-info">
                <h5><i class="icon fas fa-info"></i> Vérifiez sur Marhaba que le client ne dispose pas de bonus avant de faire
                    l'opération.!</h5>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-success mr-1" id="btnBonus1">Le client n'a pas de Bonus/Dispose d'avantages MAXY</button>
                    <button type="button" class="btn btn-warning mr-1" id="btnBonus3">Le client Dispose d'un bonus hors MAXY</button>
                </div>
            </div>
            <div></div>





        </div>

        <div class="card card-body m-2" id="notifBonus1" style="display: none;">
            <div class="row">
                <div class="col-12 text-left">
                    <strong>Procéder à l'opération, <span class="text-danger">activer l'Opt-In</span> via le bouton dédié <span class="text-danger">sur Marhaba</span>, après avoir fait le nécessaire, lire ceci : </strong><br>
                    Cher M/Mme, il vous suffit de recharger <b>1000DA</b> et plus pour bénéficier des avantages de <span class="text-danger">La Gold Jdida</span>. <br>
                    Sachez M/Mme que votre renouvellement sera automatique et suivra votre première recharge, vous avez aussi la
                    possibilité de revenir à votre offre initiale une seule fois dans les <b>30 jours</b> qui suivent votre
                    changement via le menu <span class="text-danger">*500#</span>
                    <p class="mt-2"><b> Veuillez noter que votre offre est encore valable au 22/02/2024 ! c'est-à-dire, il faudrait
                            effectuer un rechargement de 1000 DA et plus avant cette date.</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left">
                    <div class="info-box mt-2 border border-danger">
                        <span class="info-box-icon bg-danger"><i class="fas fa-user"></i></span>

                        <!-- /.info-box-content -->
                    </div>

                    <div class="alert alert-success" role="alert">

                        <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap">
                                <i class="feather icon-alert-triangle"></i>
                            </div>
                        </div>
                        <h2 class="alert-heading">Pour le conseiller </h2>
                        <p class="text-bold text-danger">Si le client dispose des avantages relatifs aux différentes recharges MAXY,
                            cela n'aura aucun impact et les bonus pourront être transférés vers la GOLD jdida lors de la migration.</p>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">

                            <<button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light" data-dashlane-rid="6c4aa42c6cc0648e" data-dashlane-label="true" data-form-type="other" id="Identif">Identification</button>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <div class="card card-body m-2" id="notifBonus2" style="display: none;">
            <div class="row">
                <div class="col-12 text-left">
                    <strong><span class="text-danger">activer l'Opt-In</span> sur <span class="text-danger">sur Marhaba</span>, et
                        <span class="text-bold text-danger">prévenir le client </span> qu'il doit consommer son bonus avant de
                        procéder au rechargement, lire ceci : </strong><br>
                    Cher client, vous avez encore un bonus d'un montant de « Donner le montant » consommez-le avant, puis
                    rechargez <b>1000DA</b> et plus afin de  bénéficier des avantages de <span class="text-danger">La Gold
                        Jdida</span>. <br>
                    Sachez M/Mme que votre renouvellement sera automatique et suivra votre première recharge, vous avez aussi la
                    possibilité de revenir à votre offre initiale une seule fois dans les <b>30 jours</b> qui suivent votre
                    changement via le menu <span class="text-danger">*500#</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left">
                    <div class="info-box mt-2 border border-danger">
                        <span class="info-box-icon bg-danger"><i class="fas fa-user"></i></span>
                        <!-- /.info-box-content -->
                    </div>
                    <div class="alert alert-success" role="alert">

                        <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap">
                                <i class="feather icon-alert-triangle"></i>
                            </div>
                        </div>
                        <h2 class="alert-heading">Pour le conseiller </h2>
                        <p class="text-bold text-danger">Si le client dispose des avantages relatifs aux différentes recharges MAXY,
                            cela n'aura aucun impact et les bonus pourront être transférés vers la GOLD jdida lors de la migration.</p>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">

                            <<button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light" data-dashlane-rid="6c4aa42c6cc0648e" data-dashlane-label="true" data-form-type="other" id="Identif">Identification</button>
                        </div>
                    </div>

                </div>
            </div>


        </div>




        </div>
        <div id="scriptA" class="card card-body m-2" style="display:block">
            <h6>A)</h6>
            <p>�Si le client n�a pas de bonus, ou dispose d�avantages Maxy, proc�der � l�op�ration, activer l�Opt In via le bouton d�di� sur Marhaba, apr�s avoir fait le n�cessaire, lire ceci :</p>

            <p>
                Cher M/Mme, il vous suffit de recharger 1000DA et plus pour b�n�ficier des avantages de � La Gold Jdida �. Sachez M/Mme que votre renouvellement sera automatique et suivra votre premi�re recharge, vous avez aussi la possibilit� de revenir � votre offre initiale une seule fois dans les 30 jours qui suivent votre changement via le menu *500# </p>
            <p>Veuillez noter que votre offre est valable au 22/02/2024 (inclus) ! c�est-�-dire, il faudrait effectuer un rechargement de 1000 DA et au plus tard � cette date</p>
            </br>
            <h6>B)</h6>
            <p>�Si le client dispose d�un bonus hors MAXY : activer l�optin sur marhaba et pr�venir le client qu�il doit consommer son bonus avant de proc�der au rechargement, lire ceci</p>
            <p>Cher client, vous avez encore un bonus d�un montant de � Donner le montant � consommez-le avant, puis rechargez 1000Da et plus afin de b�n�ficier des avantages de � La Gold Jdida �. Sachez M/Mme que votre renouvellement sera automatique et suivra votre premi�re recharge, vous avez aussi la possibilit� de revenir � votre offre initiale une seule fois dans les 30 jours qui suivent votre changement via le menu *500# </p>
            <p class="text-center mt-2 mb-2"><button class="btn btn-info" type="button" onclick="javascript:identification();">Continuer</button></p>
        </div>



        <div id="scriptZ" class="card card-body m-2" style="display:none">
            <h6>B)</h6>
            <p>1. Pouvez-vous me dire ce qui vous empêche d’adopter « La Gold Jdida ?</p>
            <select class="form-control" name="RaisonduchoixOoredoo[]" id="countrySelect" multiple="" required="required" data-dashlane-rid="4b7991d56996985a" data-kwimpalastatus="dead" data-dashlane-filled-by-user="true" data-form-type="">
                <option value="Je préfère garder mon offre actuelle">•Je préfère garder mon offre actuelle.</option>
                <option value="La recharge est trop chère">•La recharge est trop chère</option>
                <option value="Pas assez de volume data">•Pas assez de volume data</option>
                <option value="Qualité de la connexion internet">•Qualité de la connexion internet</option>
                <option value="Autre : champs de saisie">•Autre : champs de saisie
                </option>
            </select>
            <div class="row">



                <div class="col-sm-3">
                    <button type="button" class="btn btn-info waves-effect waves-light" onClick="javascript:identification();">Continuer</button>
                </div>

            </div>

        </div>

        <div id="argu2" class="card card-body m-2" style="display: none;">
            <h3 class="text-info">Le client a déjà activé l'Opt-in </h3>
            <div class="row">
                <div class="col-12 text-left">
                    Cher client, sachez qu'il vous suffit à présent de recharger <b>1000 DA et plus</b>, afin de bénéficier des
                    avantages de La <span class="text-danger">Gold Jdida</span>. <br>
                    Sachez M/Mme que votre renouvellement sera automatique et suivra votre première recharge, vous avez aussi la
                    possibilité de revenir à votre offre initiale une seule fois dans les <b>30 jours</b> qui suivent votre
                    changement via le menu <span class="text-warning">*500#</span>
                    <p class="mt-2 mb-2">
                    <div class="info-box mt-2 border border-danger">
                            <span class="info-box-icon bg-danger"><i class="fas fa-user"></i></span>
                            <!-- /.info-box-content -->
                        </div>
                        <b>
                    Veuillez noter que votre offre est valable au 22/02/2024 (inclus) ! c’est-à-dire, il faudrait effectuer un rechargement de 1000 DA et au plus tard à cette date                        </b></p>
                    <b>Assurez-vous de consommer l’ensemble de votre bonus avant d’effectuer votre rechargement </b>
                    
                </div>
            </div>
            <div class="alert alert-success" role="alert">

                <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                    <div class="fonticon-wrap">
                        <i class="feather icon-alert-triangle"></i>
                    </div>
                </div>
                <h2 class="alert-heading">Pour le conseiller client</h2>
                <h4 class="text-bold text-danger">•Si le client dispose des avantages relatifs aux différentes recharges MAXY, cela n’aura aucun impact et les bonus pourront être transférés vers la GOLD Jdida lors de la migration.</h4>
            </div>
            <div class="row">
                        <div class="col-12 text-center">

                            <button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block waves-effect waves-light" data-dashlane-rid="6c4aa42c6cc0648e" data-dashlane-label="true" data-form-type="other" id="Identif">Identification</button>
                        </div>
                    </div>

        </div>

        <div id="argu3" class="card card-body m-2" style="display: none;">

            <div class="row">
                <div class="col-12">
                    <h4 class="text-primary">Pouvez-vous me dire ce qui vous empêche d'adopter Â« La Gold Jdida ?</h4>
                </div>

                <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="Argumentaire3[]" value="Je préfère garder mon offre actuelle">
                            <label class="form-check-label">Je préfère garder mon offre actuelle.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="Argumentaire3[]" value="La recharge est trop chère">
                            <label class="form-check-label">La recharge est trop chère</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="Argumentaire3[]" value="Pas assez de volume data">
                            <label class="form-check-label">Pas assez de volume data.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="Argumentaire3[]" value="Qualité de la connexion internet">
                            <label class="form-check-label">Qualité de la connexion internet</label>
                        </div>

                    </div>
                </div>
                <div class="col-12 mb-2">
                    <div class="form-group mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="Argumentaire3[]" value="autre">
                            <label class="form-check-label">Autre.</label>
                        </div>
                    </div>
                    <input class="form-control" type="textarea" placeholder="Autre" name="Autre">
                </div>


                <div class="callout callout-danger">


                    <b>Cher client, sachez que vous pouvez changer vers <span class="text-danger">La Gold Jdida</span>, via le code <span class="text-warning">*500#</span> et cette offre est encore valable <span class="text-danger">jusqu'au <strong>«22/02/2024»</strong></span>.<br>
                        <span class="text-danger">Dépasser ce délai, l'offre ne sera plus disponible </span>
                </div>
            </div>

            <div class="card card-body m-2" id="notifBonus2" style="display: block;">
                <div class="row">
                    <div class="col-12 text-left">
                        <strong><span class="align-middle">activer l'Opt-In</span> sur <span class="align-middle">sur Marhaba</span>, et <span class="text-bold text-danger">pr�venir le client </span> qu'il doit consommer son bonus avant de proc�der au rechargement, lire ceci : </strong><br>
                        Cher client, vous avez encore un bonus d'un montant de Donner le montant consommez-le avant, puis rechargez <b>1000DA</b> et plus pour b�n�ficier des avantages de <span class="text-danger"></b>La Gold Jdida</b></span>. <br>
                        Sachez M/Mme que votre renouvellement sera automatique et suivra votre premi�re recharge, vous avez aussi la possibilit� de revenir � votre offre initiale une seule fois dans les <b>30 jours</b> qui suivent votre changement via le menu <span class="text-danger">*500#</span>
                    </div>
                </div>
                <p>&nbsp;</p>

                <div class="row">
                    <div class="col-12 text-left">
                        <div class="info-box mt-2 border border-danger">
                            <span class="info-box-icon bg-danger"><i class="fas fa-user"></i></span>
                            <!-- /.info-box-content -->
                        </div>

                        <div class="callout callout-warning">
                            <h5>Pour le conseiller </h5>

                            <p class="text-bold text-danger">Si le client dispose des avantages relatifs aux diff�rentes recharges MAXY, cela n'aura aucun impact et les bonus pourront tre transf�r�e vers la GOLD jdida lors de la migration.</p>
                        </div>

                    </div>
                </div>


            </div>





            <div id="identification" class="card card-body border-top border-danger m-2">


                <?php include("identification.php"); ?>

                <div class="row">

                    <div class="col-12">
                        <h3><span class="text-info">Prise de conge :</span></h3>
                        <b>Nous vous remercions Mme/M d avoir choisi Ooredoo.</b> <br><br>
                        <b>Nous vous souhaitons une excellente journee.</b> <br><br>
                        <b>Pour plus d informations, contactez le service client <span class="text-warning"> au 333 </span>, disponible <p class="warning">7j/7 et 24h/24</span>.</b> <br><br>
                        <h4> <b class="text-primary">A bientot</b> </h4><br><br>
                    </div>

                </div>

                <div class="row">
                    <div class="col-10 text-center"><button class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">VALIDER</button></div>
                </div>
            </div>


    </form>
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a class="text-bold-800 grey darken-2" href="https://Mc-solution.org" target="_blank">MC-Solution,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("ready!");
            //$('#script2').hide();
            //$('#script2RDV').hide();
            $('[id^="script"]').hide();
            $('[id^="argu"]').hide();
            $('#C1DIV').hide();
            $('#div0').show();
            $('#firstscript_0').hide();
            $('[id^="notifBonus"]').hide();
            $('#identification').hide();
            $("#DivRaisonduchoixOoredooAutres").hide();
            $("#DivRaisonduchoixMobilisAutres").hide();
            $("#DivRaisonduchoixDjezzyAutres").hide();

        });
        //Div
        $('[id^="1_"]').click(function() {
            var id = this.id;
            var reponse = id.replace('1_', '');
            console.log(reponse);
            if (reponse == "OUI") {
                ;
                $('[id^="script"]').hide();
                $('#C1DIV').show();
                scrollToAnchor('C1BTN');
                // $('#script2').show();

            };
            if (reponse == "NON") {
                ;
                $('[id^="script"]').hide();
                $('[id^="QT"]').hide();

                $('#C1DIV').hide();

                $('#identification').hide();

                //$('#script1').show();
                $('#script2RDV').show();
            };
        });




        $('#btnValidNone').click(function() {
            var vendor_lead_code = '<?php echo $_GET["vendor_lead_code"]; ?>';
            var call_id = '<?php echo $_GET["call_id"]; ?>';
            var uniqueid = '<?php echo $_GET["uniqueid"]; ?>';
            var nom = '<?php echo $_GET["nom"]; ?>';
            var prenom = '<?php echo $_GET["prenom"]; ?>';
            var agent_log_id = '<?php echo $_GET["agent_log_id"]; ?>';
            var lead_id = '<?php echo $_GET["lead_id"]; ?>';
            var list_id = '<?php echo $_GET["list_id"]; ?>';

            $.post("form.php", {
                vendor_lead_code: vendor_lead_code,
                call_id: call_id,
                uniqueid: uniqueid,
                nom: nom,
                prenom: prenom,
                agent_log_id: agent_log_id,
                lead_id: lead_id,
                list_id: list_id
            }, function(result) {
                // $("span").html(result);
                console.log(result);

                $('body').html(result);
            });


        });

        function displayCheckedElement() {
            var checkedElement = $('input[name="c1"]:checked');
            if (checkedElement.length > 0) {
                console.log("Checked Element: " + checkedElement.val());
                // Here, you can do whatever you want with the checked element, e.g., display it on the page.
                $('#checkedElementDisplay').text("Checked Element: " + checkedElement.val());
            }
        }


        $('#C1BTN').click(function() {
            var reponse = $('input[name=c1]:checked').val()
            console.log("Reponse : " + reponse);
            if (reponse > 0) {
                ;

                if (reponse == 1) {
                    ;
                    $('#firstscript_0').hide();
                    $("#QT6").show();
                };

                if (reponse == 2) {
                    ;
                    $('#firstscript_0').hide();
                    goToScript("C");

                };

                if (reponse == 3) {
                    ;
                    $('#scriptE').hide();
                    $('#scriptD').hide();
                    $("#firstscript_0").show();
                    scrollToAnchor("Q1");

                };
            } else {
                ;
                $(function() {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    toastr.error('Vous devez s�l�ctionner une Option !')
                });
            };
        });
        $("#Votre_situation_individuelle").change(function() {
            var sel = $(this).val();
            if (sel == "Autre") {
                ;
                $("#Autre_situation_individuelleDiv").show();
                $("#Autre_situation_individuelle").attr('required', 'required');
            } else {
                ;
                $("#Autre_situation_individuelleDiv").hide();
                $("#Autre_situation_individuelle").removeAttr('required');
            };

        });
        $('#btnQ1').click(function() {
            // Directly show CAS1Div
            $("#CAS1Div").show();
        });
        $('#Q2').change(function() {
            var sel = $(this).val();
            console.log("Q2 : " + sel);
            if (sel == "") {
                ;
                $("#btnQ2").hide();
            } else {
                ;
                $("#btnQ2").show();
            };
        });


        $('#btnQ2').click(function() {
            var rep = $('#Q2').val();
            if (rep == "OUI") {
                ;
                // Go to Script A
                goToScript("A");
            };

            if (rep == "NON") {
                ;
                goToScript("Z");
            };
            if (rep == "Deja active") {
                ;
                goToScript("E");
            };

        });

        $('#Q3').change(function() {
            var sel = $(this).val();
            console.log("Q3 : " + sel);
            if (sel == "") {
                $("#btnQ3").hide();
            } else {
                $("#btnQ3").show();
            }
        });

        $('#btnQ3').click(function() {
            var rep = $('#Q3').val();
            if (rep == "OUI") {
                ;
                // Go to Script A
                goToScript("A");
            };

            if (rep == "NON") {
                ;
                goToScript("C");
            };
            if (rep == "Deja active") {
                ;
                goToScript("E");
            };
            $("#CAS1Div").show();
        });


        $('#planClient').change(function() {
            var sel = $(this).val();
            var rep = $('#Q1').val();
            console.log("Plan Client : " + sel);

            if (rep == "OUI" && sel != "") {
                ;
                $("#btnQ1").show();
            };
            if (rep == "NON") {
                ;
                $("#planClientDIV").hide();
                $("#btnQ1").show();
            };
        });
        $('#btnQ1').click(function() {
            var sel = $('#planClient').val();

            if (sel == "1") {
                ;
                $("#CAS1Div").show();
                $('[id^="script"]').hide();
                $("#Q2").attr('required', 'required');
                scrollToAnchor('Q2');
            };
            if (sel == "2") {
                $("#CAS1Div").show();
                $('[id^="script"]').hide();
                $("#Q2").attr('required', 'required');
                scrollToAnchor('Q2');
            };

        });

        $('#Q4').change(function() {
            var sel = $(this).val();
            console.log("Q4 : " + sel);
            if (sel == "") {
                ;
                $("#btnQ4").hide();

            } else {
                ;
                $("#btnQ4").show();
            };

        });
        $('[id^="2_"]').click(function() {
            var id = this.id;
            var reponse = id.replace('2_', '');
            console.log(reponse);
            if (reponse == "OUI") {
                ;
                $('#assistance').removeAttr('required');

                $("#dejaclientDima").val("OUI");
                $('#identification').show();

                $('#script2cl').show();
                $('#script3').hide();
            };
            if (reponse == "NON") {
                ;
                $("#dejaclientDima").val("NON");
                $('#assistance').attr('required', 'required');
                $('#script2cl').hide();
                $('#script3').show();
                scrollToAnchor('script3');
            };
        });

        $('[id^="22_"]').click(function() {
            var id = this.id;
            var reponse = id.replace('22_', '');
            console.log(reponse);
            if (reponse == "OUI") {
                ;
                $('#assistance').removeAttr('required');

                $("#dejaclientDima").val("OUI");
                $('#identification').show();

                $('#script2cl').show();
                $('#script3').hide();
            };
            if (reponse == "NON") {
                ;
                $('#script2cl').hide();
                $('#script5').show();
                scrollToAnchor('script3');
            };
        });
        $('[id^="3_"]').click(function() {
            var id = this.id;
            var reponse = id.replace('3_', '');
            console.log(reponse);
            if (reponse == "OUI") {
                ;
                $('[id^="argu"]').hide();
                removeRequired();
                $('#argu1').show();
                scrollToAnchor('argu1');
                $('[id^="notifBonus"]').hide();

            };
            if (reponse == "NON") {
                ;
                $('[id^="argu"]').hide();
                $('#argu3').show();
                $('[id^="notifBonus"]').hide();
                $('#identification').show();

                setRequired();
                scrollToAnchor('argu3');

            };
            if (reponse == "EFFECTUE") {
                ;
                removeRequired();
                $('[id^="argu"]').hide();
                $('#argu2').show();
                $('[id^="notifBonus"]').hide();
                $('#identification').show();
                scrollToAnchor('argu2');

            };
        });
        $('[id^="btnBonus"]').click(function() {
            var id = this.id;
            var reponse = id.replace('btnBonus', '');
            console.log(reponse);
            if (reponse < 3) {
                ;
                $('[id^="notifBonus"]').hide();

                $('#notifBonus1').show();
                scrollToAnchor('notifBonus1');


            } else {
                ;
                $('[id^="notifBonus"]').hide();

                $('#notifBonus2').show();
                scrollToAnchor('notifBonus2');
            };
        });
        $("#assistance").change(function() {
            var val = $("#assistance").val();
            console.log("Test val :" + val);
            if (val == "Oui") {
                ;
                $("#3_OUI").click();
            };
            if (val == "Non") {
                ;
                $("#3_NON").click();
            };

            if (val == "deja effectue") {
                ;
                $("#3_EFFECTUE").click();
            };



        });
        $('#btnQ4').click(function() {
            var rep = $('#Q4').val();
            if (rep == "OUI") {
                ;
                goToScript('A');
            };

            if (rep == "NON") {
                ;
                goToScript('Z');

            };
            if (rep == "Deja active") {
                ;
                goToScript("E");
            };


        });
        $('#Q5').change(function() {
            var sel = $(this).val();
            console.log("Q5 : " + sel);
            if (sel == "") {
                ;
                $("#btnQ5").hide();
            } else {
                ;
                let z = 0;
                $('#' + this.id + ' option:selected').each(function() {
                    if ($(this).val() == "Autre") {
                        ;
                        z++;
                        console.log("option : " + $(this).val());

                    };
                });
                if (z > 0) {
                    ;
                    $("#Qautre5Div").show();
                    $('#Qautre5').attr('required', 'required');

                    $("#btnQ5").show();

                } else {
                    $("#Qautre5Div").hide();
                    $('#Qautre5').removeAttr('required');

                    $("#btnQ5").show();

                };
                $("#btnQ5").show();

            };
        });
        $('[id^="autresim_"]').change(function() {
            // this represents the checkbox that was checked
            // do something with it
            var count = 0;
            $('[id^="autresim_"]').each(function() {
                count = this.checked ? count + 1 : count + 0;
            });
            console.log("count checked : " + count);

            var id = this.id;
            var reponse = id.replace('autresim_', '');
            var reponseUC = reponse[0].toUpperCase() + reponse.slice(1);
            if ($("#" + id).prop("checked")) {
                ;
                $('#autrepuce_' + reponse).show();
                $('#Offre_' + reponse).attr('required', true);
                $('#Raisonduchoix' + reponseUC).attr('required', true);

            } else {
                ;
                $('#autrepuce_' + reponse).hide();
                $('#Offre_' + reponse).attr('required', false);
                $('#Raisonduchoix' + reponseUC).attr('required', false);
            };

            if (id == "autresim_none") {
                ;
                if ($("#autresim_none").prop("checked")) {
                    ;
                    $("#autresim_ooredoo").prop("checked", false);
                    $("#autrepuce_satisfaction_ooredoo").prop("checked", false);
                    $("#autresim_djezzy").prop("checked", false);
                    $("#autresim_mobilis").prop("checked", false);
                    $("#autresim_djezzy").attr("disabled", true);
                    $("#autresim_mobilis").attr("disabled", true);
                    $("#autresim_ooredoo").attr("disabled", true);
                    $("#autrepuce_satisfaction_ooredoo").attr("disabled", true);
                    $('[id^="autrepuce_"]').hide();
                } else {
                    ;
                    $("#autresim_djezzy").attr("disabled", false);
                    $("#autresim_mobilis").attr("disabled", false);
                    $("#autresim_ooredoo").attr("disabled", false);
                    $("#autrepuce_satisfaction_ooredoo").attr("disabled", false);

                };
            };
            console.log(reponse);
        });

        $('[id^="Raisonduchoix"]').change(function() {
            console.log("Raison du choix " + $(this).val());
            console.log("this id : " + this.id);
            idT = this.id;
            var reponseI = idT.replace('Raisonduchoix', '');

            console.log("reponseI 2 : " + reponseI);
            var z = 0;
            $('#' + this.id + ' option:selected').each(function() {
                if ($(this).val() == "Autre") {
                    ;
                    z = z + 1;
                    console.log("option : " + $(this).val());

                };
            });

            console.log("z : " + z);

            console.log("reponseI 2 : " + reponseI);
            if (z > 0) {
                ;
                $("#DivRaisonduchoix" + reponseI + "Autres").show();
                console.log("reponseI 3 : " + reponseI);
                $("#oRaisonduchoix" + reponseI + "Autres").attr('required', true);
            } else {
                ;
                $("#DivRaisonduchoix" + reponseI + "Autres").hide();
                console.log("reponseI 4 : " + reponseI);
                $("#oRaisonduchoix" + reponseI + "Autres").attr('required', false);

            };
        });
        $("#Votre_situation_individuelle").change(function() {
            if ($("#Votre_situation_individuelle").val() == 'Autre ') {
                ;
                $('#Autre_situation_individuelle').attr('required', true);
            } else {
                ;

                $('#Autre_situation_individuelle').attr('required', false);
            };
        });
        $('[id^="Offre_"]').change(function() {
            var id = this.id;
            var reponse = id.replace('Offre_', '');
            console.log();
            if ($("#" + id).val() == "autre") {
                ;
                $('#autreoffre_' + reponse).show();
                $('#AutreOffre_input_' + reponse).attr('required', true);
            } else {
                ;
                $('#autreoffre_' + reponse).hide();
                $('#AutreOffre_input_' + reponse).attr('required', false);

            };
            console.log(reponse);
        });

        var requiredCheckboxes = $('[name^="Argumentaire3"]');
        requiredCheckboxes.change(function() {
            if (requiredCheckboxes.is(':checked')) {
                requiredCheckboxes.removeAttr('required');
            } else {
                requiredCheckboxes.attr('required', 'required');
            }
        });

        function setRequired() {
            $('[name^="Argumentaire3"]').attr('required', 'required');
        }

        function removeRequired() {
            $('[name^="Argumentaire3"]').removeAttr('required');
        }

        function scrollToAnchor(aid) {
            console.log(aid);
            $('html,body').animate({
                scrollTop: $('#' + aid).offset().top
            }, 'slow');
        }

        function goToScript(id) {
            ;
            var scriptName = "script" + id;
            console.log("GotoScript : " + scriptName);
            $('[id^="script"]').hide();

            $('[id^="QT"]').hide();
            $('#' + scriptName).show();
            scrollToAnchor(scriptName);
        };

        function goToQuestion(id) {
            ;
            var QTName = "QT" + id;
            console.log("GotoQuestion : " + QTName);
            let n = id;
            n++;
            console.log("N id : " + n);
            while (n < 8) {
                console.log("N : " + n);
                $('#QT' + n).hide();
                $('#Q' + n).removeAttr('required');
                $('#Qautre' + n).removeAttr('required');
                n++;
            }
            $('#' + QTName).show();
            $('#Q' + id).attr('required', 'required');
            scrollToAnchor(QTName);
        };

        function identification() {
            console.log("identification");
            $('#identification').show();
        }
        $(document).ready(function() {
            // Function to toggle visibility of the card based on checkbox selection
            function togglePasSatisfaitCard() {
                var plutotPasSatisfaitChecked = $('#plutot_pas_satisfait').prop('checked');
                var pasDuToutSatisfaitChecked = $('#pas_satisfait').prop('checked');

                if (plutotPasSatisfaitChecked || pasDuToutSatisfaitChecked) {
                    $('#pas_satisfait_card').show();
                } else {
                    $('#pas_satisfait_card').hide();
                }
            }

            // Attach the function to checkbox change event
            $('#plutot_pas_satisfait, #pas_satisfait').change(function() {
                togglePasSatisfaitCard();
            });

            // Initial check on page load
            togglePasSatisfaitCard();
        });

        function insatisfaction() {
            console.log("insatisfaction");
            $('#insatisfaction').show();
            scrollToAnchor('insatisfaction');
            $('#form').submit();

        }
        $(document).ready(function() {
            // Function to toggle visibility of the card based on checkbox selection
            function toggleSatisfactionCard() {
                var tresSatisfaitCheckbox = $('#tres_satisfait').prop('checked');
                var plutotSatisfaitCheckbox = $('#plutot_satisfait').prop('checked');
                var ooredooCheckbox = $('#sans_opinion').prop('checked');

                if (tresSatisfaitCheckbox || plutotSatisfaitCheckbox || ooredooCheckbox) {
                    $('#satisfait_card').show();
                } else {
                    $('#satisfait_card').hide();
                }
            }

            // Attach the function to checkbox change events
            $('#tres_satisfait, #plutot_satisfait, #sans_opinion').change(function() {
                toggleSatisfactionCard();
            });

            // Initial check on page load
            toggleSatisfactionCard();
        });

        $(document).ready(function() {
            // Function to toggle visibility of card elements based on checkbox selection
            function toggleCardVisibility(checkboxId, cardId) {
                var isChecked = $('#' + checkboxId).prop('checked');
                if (isChecked) {
                    $('#' + cardId).show();
                } else {
                    $('#' + cardId).hide();
                }
            }

            // Attach the function to checkbox change events
            $('#autrepuce_satisfaction_ooredoo').change(function() {
                toggleCardVisibility('autrepuce_satisfaction_ooredoo', 'autrepuce_satisfaction_ooredoo_card');
            });

            $('#autrepuce_satisfaction_mobilis').change(function() {
                toggleCardVisibility('autrepuce_satisfaction_mobilis', 'autrepuce_satisfaction_mobilis_card');
            });

            $('#autrepuce_satisfaction_djezzy').change(function() {
                toggleCardVisibility('autrepuce_satisfaction_djezzy', 'autrepuce_satisfaction_djezzy_card');
            });

            // Initial check on page load
            toggleCardVisibility('autrepuce_satisfaction_ooredoo', 'autrepuce_satisfaction_ooredoo_card');
            toggleCardVisibility('autrepuce_satisfaction_mobilis', 'autrepuce_satisfaction_mobilis_card');
            toggleCardVisibility('autrepuce_satisfaction_djezzy', 'autrepuce_satisfaction_djezzy_card');
        });

        $(document).ready(function() {
            // Function to toggle visibility of card elements based on checkbox selection
            function toggleCardVisibility(checkboxId, cardId) {
                var isChecked = $('#' + checkboxId).prop('checked');
                if (isChecked) {
                    $('#' + cardId).show();
                } else {
                    $('#' + cardId).hide();
                }
            }

            // Attach the function to checkbox change events
            $('#autrepuce_insatisfaction_ooredoo').change(function() {
                toggleCardVisibility('autrepuce_insatisfaction_ooredoo', 'autrepuce_insatisfaction_ooredoo_card');
            });

            $('#autrepuce_insatisfaction_mobilis').change(function() {
                toggleCardVisibility('autrepuce_insatisfaction_mobilis', 'autrepuce_insatisfaction_mobilis_card');
            });

            $('#autrepuce_insatisfaction_djezzy').change(function() {
                toggleCardVisibility('autrepuce_insatisfaction_djezzy', 'autrepuce_insatisfaction_djezzy_card');
            });

            // Initial check on page load
            toggleCardVisibility('autrepuce_insatisfaction_ooredoo', 'autrepuce_insatisfaction_ooredoo_card');
            toggleCardVisibility('autrepuce_insatisfaction_mobilis', 'autrepuce_insatisfaction_mobilis_card');
            toggleCardVisibility('autrepuce_insatisfaction_djezzy', 'autrepuce_insatisfaction_djezzy_card');
        });

        function satisfaction() {
            console.log("satisfaction");
            $('#satisfaction').show();
            scrollToAnchor('satisfaction');
            $('#form').submit();

        }
    </script>
</body>

</html>