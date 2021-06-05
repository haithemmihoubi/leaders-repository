
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

    <title>Acceuil</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/classe.css" rel="stylesheet" />
    
    <!--  Paper Dashboard core CSS    -->
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
                        <a class="navbar-brand" href="#">leaders-university</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p class="notification"></p>
                                    <p><strong>Etudiant</strong></p>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><span class="ti ti-announcement fa-2x"></span> </strong> <strong>&nbsp;&nbsp; Bienvenue dans votre tableau de bord  !!</strong>.
                    </div>
       
                    <div class="row">
                    <?php
    require_once 'connexion.php';
    $result = $cnx->query("SELECT * FROM etudiant");
    $pdoQuery = "SELECT * FROM etudiant";

    $pdoResult = $cnx->query($pdoQuery);

    $pdoRowCount = $pdoResult->rowCount();


    ?>
                    <div class="row">
                        <!--row begins-->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                            <img src="https://img.icons8.com/emoji/45/000000/man-student.png"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p><strong>Étudiants</strong></p>
                                                <?php echo  $pdoRowCount; ?> 

                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <?php
    require_once 'connexion.php';
    $result = $cnx->query("SELECT * FROM enseignant");
    $pdoQuery = "SELECT * FROM enseignant";

    $pdoResult = $cnx->query($pdoQuery);

    $pdoRowCount = $pdoResult->rowCount();


    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-info text-center">
                                            <img src="https://img.icons8.com/color/48/000000/teacher.png"/>   
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p><strong>Enseignants </strong></p>
                                                <?php echo  $pdoRowCount; ?> 
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                 
                        <?php
    require_once 'connexion.php';
    $result = $cnx->query("SELECT * FROM classe");
    $pdoQuery = "SELECT * FROM classe";

    $pdoResult = $cnx->query($pdoQuery);

    $pdoRowCount = $pdoResult->rowCount();


    ?>

                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-success text-center">
                                            <img src="https://img.icons8.com/dusk/48/000000/class.png"/>  
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p><strong>Classe</strong></p>
                                                <?php echo  $pdoRowCount; ?> 
                                            </div>
                                        </div>
                                    </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <?php
    require_once 'connexion.php';
    $result = $cnx->query("SELECT * FROM matiere");
    $pdoQuery = "SELECT * FROM matiere";

    $pdoResult = $cnx->query($pdoQuery);

    $pdoRowCount = $pdoResult->rowCount();


    ?>



                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-success text-center">
                                            <img src="https://img.icons8.com/ultraviolet/40/000000/elective.png"/> 
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p><strong>Matières</strong></p>
                                                <?php echo  $pdoRowCount; ?> 
                                            </div>
                                        </div>
                                    </div>
                                    <a href="Matiere.php">
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-arrow-right"></i>View
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php
    require_once 'connexion.php';
    $S_cin=$_SESSION['login'];

    $result = $cnx->query("SELECT * FROM note where cin_etudiant='$S_cin'");
    $pdoQuery = "SELECT * FROM note where cin_etudiant='$S_cin'";

    $pdoResult = $cnx->query($pdoQuery);

    $pdoRowCount = $pdoResult->rowCount();


    ?>

                        <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-primary text-center">
                                        <img src="https://img.icons8.com/nolan/48/note.png"/> 
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Notes</strong></p>
                                         
                                            <?php echo  $pdoRowCount; ?> 

                                        </div>
                                    </div>
                                </div>
                                <a href="noteEtudiant.php">
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-arrow-right"></i>View
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
    require_once 'connexion.php';
    $result = $cnx->query("SELECT * FROM cour");
    $pdoQuery = "SELECT * FROM cour";

    $pdoResult = $cnx->query($pdoQuery);

    $pdoRowCount = $pdoResult->rowCount();


    ?>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-primary text-center">
                                             <img src="https://img.icons8.com/fluent/48/000000/course-assign.png"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Cours</strong></p>
                                            <?php echo  $pdoRowCount; ?> 

                                        </div>
                                    </div>
                                </div>
                                <a href="cour.php">
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-arrow-right"></i>View
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>




                    
                    <?php
    require_once 'connexion.php';
    $result = $cnx->query("SELECT * FROM seancecours");
    $pdoQuery = "SELECT * FROM seancecours";

    $pdoResult = $cnx->query($pdoQuery);

    $pdoRowCount = $pdoResult->rowCount();


    ?>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-primary text-center">
                                        <img src="https://img.icons8.com/plasticine/48/000000/book.png""/>                                       
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Seance Cours</strong></p>
                                            <?php echo  $pdoRowCount; ?> 

                                        </div>
                                    </div>
                                </div>
                                <a href="SeanceCour.php">
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-arrow-right"></i>View
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>






                    </div>
                    <!--row ends-->
                    <!--row begins-->


                   
                    <!--row ends-->
                </div>
                <!--row begins-->
                <!--row begins-->
                <div style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

                    <!-- #region Jssor Slider Begin -->
                    <!-- Generator: Jssor Slider Maker -->
                    <!-- Source: https://www.jssor.com -->
                    <script src="../js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
                    <script  src ="../js/classe.js" type="text/javascript"></script>
                
             
                
                    <script type="text/javascript">
                        jssor_1_slider_init();
                    </script>
                    <!-- #endregion Jssor Slider End -->
                </div>
                <!--cards and widgets above here-->
               

            </div>
        </div>


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