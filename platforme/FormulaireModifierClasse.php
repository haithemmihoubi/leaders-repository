<?php
require_once 'connexion.php';
session_start();


if(!(isset($_SESSION['username']) && $_SESSION['username']=='Admin123'))
{
    header('location:login.php?etat=1');   
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="../assets/css/cour.css">

    <title>Classe</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../platforme/assets/css/classe.css" rel="stylesheet" />

    <link href="../platforme/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../platforme/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="../platforme/assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../platforme/assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../platforme/assets/css/themify-icons.css" rel="stylesheet">
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
                        <a class="navbar-brand" href="#">LEADERS-UNIVERSITY</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p class="notification"></p>
                                    <p><strong>admin</strong></p>
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
                                    <li><a class="btn navbar-btn btn-warning" href="logout.php"><i class="fa fa-power-off"></i> <strong style="color:black">Déconnecter</strong> </a></li>
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

       
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div style="display: flex;">
            <div class="col-lg-5 d-none d-lg-block" style="height:600px;  background-repeat:no-repeat; background-image:url('images/classe.jpg')">
            </div>

            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">
                        Modifier Classe !
                        </h1>
                    </div>
                    <?php
require_once 'connexion.php';
$ref=$_GET['edite'];
$sql="SELECT * FROM classe WHERE id_classe='$ref'";
if($ref)
{
$resultat=$cnx->query($sql);
while($row=$resultat->fetch())
{
?>
                    <form class="user" action="#" method="post"  enctype="multipart/form-data">
                        <div class="form-group row">
                        
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"  name="id_classe" id="id_classe"   value="<?php echo $row['id_classe'];?>" >
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"  name="nom_classe" id="nom_classe"  value="<?php echo $row['nom_classe'];?>">
                        </div>
                      
                        </div>
                        <button  type="submit" class="btn btn-primary btn-user  btn-block" name="update">Modifier                        
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
          <?php
}
}
?>
<?php
require_once 'connexion.php';

if(isset($_POST['update']))
{
    $id_classe=htmlspecialchars($_POST['id_classe']);
    $nom_classe=htmlspecialchars($_POST['nom_classe']);
   


    $sql="UPDATE classe set nom_classe='$nom_classe' WHERE id_classe='$id_classe'";   
    $sql2="UPDATE etudiant set nom_classe='$nom_classe' WHERE id_classe='$id_classe'";  
    $sql3="UPDATE classe_prof set nom_classe='$nom_classe' WHERE id_classe='$id_classe'";  
     
    
	$res=$cnx->exec($sql);
    $res2=$cnx->exec($sql2);
    $res3=$cnx->exec($sql3);
    
	
	if($res)
    {
       ?>
       <script>
		    swal("Classe!", "a été modifier!", "success")
</script>
<?php
    }
?>
<?php

}
?>

<script src="../platforme/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
                        <script src="../js/classe.js" type="text/javascript">
                        </script>       

                      


</body>

<!--   Core JS Files   -->
<script src="../platforme/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../platforme/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../platforme/assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="../platforme/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../platforme/assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="../platforme/assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../platforme/assets/js/demo.js"></script>

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