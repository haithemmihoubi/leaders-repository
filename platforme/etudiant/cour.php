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
    <title>Cour</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/cour.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  


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
                        <strong><span class="ti ti-announcement fa-2x"></span> </strong> <strong>&nbsp;&nbsp;

                            Bienvenue dans votre tableau de bord d'administration !! </strong>.
                    </div>


                    <!--row begins-->
                    <!--row begins-->
                    <form action="cour.php"   method="GET" class="search-form">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="search" id="search" placeholder="recherche cour par  Nom Cour" style="font-size: 15px;">
                        </div>
                    </form>

                    <div style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">


                        <div class="container-fluid">
                            <div>

                                <!-- Page Heading -->
                                <h1 class="h3 mb-2 text-gray-800">
                                    Liste des Cours</h1>


                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">

                                            EXEMPLE DE DONNÉES </h6>
                                    </div>
                                    
                       <!--Recherche Etudiant-->
            <?php
                                    require_once 'connexion.php';
                        if (isset($_GET['search']))
                        {
                            require_once 'rechercheCour.php';
                        }

            ?>

                                    <br>
                                    <div class="card-body">
                                        <div class="table table-bordered" style="color: #858796;">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                    <th>Nom Matiere</th>
                                                    <th>Rédigé Par</th>


                                                       <th>Nom Cour / Atelier</th>
                                                       <th>Lien</th>

                                                      
                                                    </tr>

                                                </thead>
                                                <?php
require_once 'connexion.php';

$result = $cnx->query("SELECT * FROM cour");
?>

        <?php
        foreach ($r = $result->fetchAll() as $row) { ?> 

                                                <tbody>
                                                    <tr>
                                                    <td><?php echo $row['nom_matiere']; ?></td>                     
                                                    <td><?php echo $row['nom_enseignant']; ?></td>                                                     
                                

                                                        <td><?php echo $row['nomCour']; ?></td>   
                                                        <td><a href="../Cour/lienCour/<?php echo $row['lienCour'];?>"><button type="button" class="btn btn-primary">Telecharger</button></a></td>
 

                                                    </tr>
                                                </tbody>
                                                <?php } ?>



                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    

   


                        <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>

  </script>

                     
                        <script src="../js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
                        <script src="../js/cour.js"  type="text/javascript">
                    
                        </script>
                                              <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort121" style="position:absolute;left:0px;top:0px;width:268px;height:380px;overflow:hidden;cursor:default;" data-autocenter="2" data-scale-left="0.75">
                            <div data-u="slides">
                                <div data-u="prototype" class="p" style="width:268px;height:68px;">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5">
                            <div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
                                    <circle class="b" cx="8000" cy="8000" r="3000"></circle>
                                </svg>
                                <div data-u="numbertemplate" class="n"></div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jssor_1_slider_init();
                    </script>
                    <!-- #endregion Jssor Slider End -->
                </div>
                <!--cards and widgets above here-->


            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>


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