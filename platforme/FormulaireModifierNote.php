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

    <title>Note</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../platforme/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../platforme/assets/css/cour.css">

    <!-- Animation library for notifications   -->
    <link href="../platforme/assets/css/animate.min.css" rel="stylesheet" />
    <link href="../platforme/assets/css/classe.css" rel="stylesheet" />

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

            <?php
require_once 'connexion.php';
$ref=$_GET['edite'];
$val2=$_GET['val2'];
$sql="SELECT * FROM note WHERE cin_etudiant='$ref' and nom_matiere='$val2'";
if($ref)
{
$resultat=$cnx->query($sql);
while($row=$resultat->fetch())
{
?>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div style="display: flex;">
            <div class="col-lg-5 d-none d-lg-block" style="height:600px;  background-repeat:no-repeat; background-image:url('images/ii.jpg')">
            </div>

            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">
                        Modifier Note !
                        </h1>
                    </div>
                    <form class="user" action="#" method="post"  enctype="multipart/form-data">
                        <div class="form-group row">
                   

                        <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user" id="cin_etudiant" name="cin_etudiant"  placeholder="CIN etudiant"  value="<?php echo $row['cin_etudiant'];?>" required>
                            </div>
                            
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="Matiere" style="margin-left: 10px;">Matiere : </label>
                        <select name="id_matiere" class="form-control form-control-lg" style="width: 100%;padding:10px;color:slategray">
                    <?php
$result2 = $cnx->query("SELECT * FROM matiere");
foreach ($r = $result2->fetchAll() as $row2) { ?>
                <option  name="id_matiere"  value=<?=$row2['id_matiere'];?> ><?php echo $row2['nom_matiere']; ?> </option>
                <?php } ?>
                </select>   

                            </div>


                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" class="form-control form-control-user"  name="note_dc" id="note_dc" placeholder="Note devoire de controle " value="<?php echo $row['note_dc'];?>" required>

                            </div>
                        </div>
                        <div class="form-group">

                            <input type="number" class="form-control form-control-user"  id="note_ds" name="note_ds" placeholder="Note devoire de synthèse" value="<?php echo $row['note_ds'];?>" required>

                        </div>

                        <div class="form-group">
                        <input type="number" class="form-control form-control-user"  id="note_np" name="note_np" placeholder="Note NP" value="<?php echo $row['note_np'];?>" required>
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
    $cin_etudiant=htmlspecialchars($_POST['cin_etudiant']);
    $id_matiere=htmlspecialchars($_POST['id_matiere']);
    $note_dc=htmlspecialchars($_POST['note_dc']);
    $note_ds=htmlspecialchars($_POST['note_ds']);
    $note_np=htmlspecialchars($_POST['note_np']);

    $mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
    $nom_matiere = $mat->fetchColumn();
 
    if($note_np=="")
    {
       $moyenne =(($_POST['note_ds']*2)+$_POST['note_dc'])/3;
    }
    else
    {  
    $moyenne =(($_POST['note_ds']*2)+$_POST['note_dc']+$_POST['note_np'])/4;
     }



    $sql="UPDATE note set  nom_matiere='$nom_matiere',note_dc='$note_dc',note_ds='$note_ds',note_np='$note_np',moyenne='$moyenne',id_matiere='$id_matiere' WHERE cin_etudiant='$cin_etudiant' and nom_matiere='$nom_matiere' ";   
	$res=$cnx->exec($sql);
	
	if($res)
    {
       ?>
       <script>
		    swal("Note Etudiant!", "a été modifier!", "success")
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