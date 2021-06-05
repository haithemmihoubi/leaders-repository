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

    <title>Notes</title>

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
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                        <a class="navbar-brand" href="#">LEADERS-UNIVERSITYT</a>
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
            <div class="container">

<?php
	require_once 'ajouterNote.php';
   ?>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div style="display: flex;">
            <div class="col-lg-5 d-none d-lg-block" style="height:600px;  background-repeat:no-repeat; background-image:url('../images/imageEtudiant/img3.jpg')">
            </div>

            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">
                            Ajouter Les Notes !
                        </h1>
                    </div>
                    <form class="user"  method="post" enctype="multipart/form-data">
                        <div class="form-group row">

                        <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user" id="cin_etudiant" name="cin_etudiant"  pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==8) return false;"  placeholder="CIN etudiant" required>
                            </div>


                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="Matiere" style="margin-left: 10px;">Matiere : </label>
                        <select name="id_matiere" class="form-control form-control-lg" style="width: 100%;padding:10px;color:slategray">
                    <?php
require_once 'connexion.php';
$S_cin=$_SESSION['login'];
$result2 = $cnx->query("SELECT * FROM matiere_prof where cin_prof='$S_cin'");
foreach ($r = $result2->fetchAll() as $row2) { ?>
                <option   name="id_matiere"  value=<?=$row2['id_matiere'];?> ><?php echo $row2['nom_matiere']; ?> </option>

                <?php } ?>
                </select>   

                            </div>
                           
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user"  name="note_dc" id="note_dc" placeholder="Note devoire de controle " required>

                        </div>

                   

                     
                        <div class="form-group row">
                          
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user"  id="note_ds" name="note_ds" placeholder="Note devoire de synthèse" required>

                            </div>
                              

                            <div class="form-group row">
                          
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="number" class="form-control form-control-user"  id="note_np" name="note_np" placeholder="Note np" required>

                          </div>


                  




                        </div>
                        <button  type="submit" class="btn btn-primary btn-user btn-block" name="save">Ajouter                        
</button>

                        <hr>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

</div>

          </div>

          <script src="../assets/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
                    <script src="../assets/js/classe.js" type="text/javascript">
                    
                    </script>


</body>
</html>
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

