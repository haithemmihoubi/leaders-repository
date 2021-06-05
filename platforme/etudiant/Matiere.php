<?php
require_once 'connexion.php';
session_start();
$res=$_SESSION['login'];
if(!(isset($_SESSION['username'])!=$res))
{
    header('location:../login.php?etat=1');   
}

?>

    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Matiere</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/classe.css" rel="stylesheet"/>       
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
    <?php
require_once "template1.php";
?>

        <div class="main-panel">
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">leaders-university
</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p class="notification"></p>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="membership_profile.php"><i class="fa fa-user"></i> <strong>My Profile Details</strong> </a></li>
                                    <!--login/logout area starts-->
                                    <li>
                                          <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
                                        </ul>
                                        <ul class="nav navbar-nav visible-xs">
                                        </ul>
                                    </li>
                                    <!--login/logout area ends-->
                                    <li class="divider"></li>
                                    <li><a class="btn navbar-btn btn-warning" href="../logout.php"><i class="fa fa-power-off"></i> <strong style="color:black">Déconnecter</strong> </a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="landing">




      
<h2 style="margin-left: 10px;">Liste des Matiere</h2>

<div class="allProduit" style="display: flex; padding:1em 2em;margin-left:20px">



    <div class="alldiv" , id="prod">
    <?php
    require_once 'connexion.php';

    $result = $cnx->query("SELECT * FROM matiere");
    


    ?>
    <?php

foreach ($r = $result->fetchAll() as $row) { ?>
        <div class="produit">
            <div>
                <div>
                <img src="../images/imageMatiere/allMatiere.png"style=" width: 180px; height: 180px;   object-fit: cover; margin-left:50px
                            ">

                </div>
                <div>
                    <h3 class="h3_1"></h3>
                    <h3 class="h3_2"></h3>
                    <p class="h3_3" style="font-weight: bold;     font-family: 'Source Sans Pro',sans-serif"> Nom Matiere: <?php echo $row['nom_matiere']; ?> </p>
                    <p class="h3_3" style="font-weight: bold;      font-family: 'Source Sans Pro',sans-serif">coef :  <?php echo $row['coef']; ?> </p>
                   
                    <a href="detailsCour.php?detaile=<?= $row['nom_matiere']; ?>"><input type="submit" name="Consulter" value="Consulter" id="ll_btnPanier" style="margin-left: 80PX;; margin-top: 1PX;margin-bottom:12px"></a>

                </div>
            </div>
        </div>
        <?php } ?>

    </div>


</div>
</div>                    <!-- Generator: Jssor Slider Maker -->
                    <!-- Source: https://www.jssor.com -->
                    <script src="../js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
                    <script src="../js/classe.js" type="text/javascript">
                    
                    </script>
                  
                 


</body>

<!--   Core JS Files   -->
<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="../assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Bienvenue dans <b> l'administrateur du système de gestion scolaire</b> - un magnifique système pour gérer votre école.."

        }, {
            type: 'success',
            timer: 3000
        });

    });
</script>

</html>