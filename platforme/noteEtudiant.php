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
    <title>Note Etudiant</title>
    <link href="../platforme/assets/css/classe.css" rel="stylesheet" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../platforme/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../platforme/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="../platforme/assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../platforme/assets/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../platforme/assets/css/cour.css">

    <link href="../platforme/assets/css/themify-icons.css" rel="stylesheet">
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
                                    <li><a href="membership_profile.php"><i class="fa fa-user"></i> <strong>My Profile
                                                Details</strong> </a></li>
                                    <!--login/logout area starts-->
                                    <li>
                                           <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
                                        </ul>
                                        <ul class="nav navbar-nav visible-xs">
                                        </ul>
                                    </li>
                                    <!--login/logout area ends-->
                                    <li class="divider"></li>
                                    <li><a class="btn navbar-btn btn-warning" href="logout.php"><i class="fa fa-power-off"></i> <strong style="color:black">D??connecter</strong> </a></li>

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
                  

                    <div style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">


                        <div class="container-fluid">
                            <div>

                                <!-- Page Heading -->
                                <h1 class="h3 mb-2 text-gray-800">
                                    Liste des Notes</h1>


                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">

                                            EXEMPLE DE DONN??ES </h6>
                                    </div>
                                    
         

                                    <br>
                                    <div class="card-body">
                                        <div class="table table-bordered" style="color: #858796;">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                       <th>Cin etudiant</th>
                                                       <th>Matiere</th>
                                                        <th>Note Devoire de Controle</th>
                                                        <th>Note Devoire de Synth??se</th>
                                                        <th>Note NP</th>
                                                        <th>coefficient</th>

                                                        
                                                        <th>Moyenne</th>
                                                        
                                                        <th>Action</th>
                                                        <th></th>
                                                        <th></th>

                                                      
                                                    </tr>

                                                </thead>
                                                <?php
require_once 'connexion.php';
$cin_etudiant=$_GET['detaile'];
    $result = $cnx->query("SELECT * FROM note where cin_etudiant='$cin_etudiant'");
    $AllCoef="";
    $moy="";

      
      


?>

        <?php
          if($result->rowCount()>0)
          { 
            foreach ($r = $result->fetchAll() as $row)
         {
         
                $mat = $row['nom_matiere'];
                $moyenne=$row['moyenne'];
                $coef = $cnx->query("SELECT coef FROM matiere where nom_matiere='$mat'");
                $r = $coef->fetchColumn();
                $cof = (int)$r;
            
                $AllCoef=(int)$AllCoef;
                $AllCoef=$AllCoef+$cof;

                $moy=(float)$moy;
                $moy=$moy+($moyenne*$cof);     
             ?> 
     
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $row['cin_etudiant']; ?></td>
                                                        <td><?php echo $row['nom_matiere']; ?></td>
                                                        <td><?php echo $row['note_dc']; ?></td>
                                                        <td><?php echo $row['note_ds']; ?></td>
                                                       

                                                        <td><?php echo $row['note_np']; ?></td>
                                                        <td><?php echo $cof ?></td>
                                                        <td><?php echo $row['moyenne']; ?></td>
                                                       
                                                        <td><a href="FormulaireModifierNote.php?edite=<?php echo $row['cin_etudiant']; ?>&val2=<?= $row['nom_matiere']; ?>"><input type="button" id="ll_btn2" value="Editer"></td>
                                                        <td><a href="supprimerNote.php?delete=<?php echo $row['cin_etudiant']; ?>&val2=<?= $row['nom_matiere'];?>" class="btn-del"><input type="button" id="ll_btn" value="Supprimer"></td>
                                                       
                                                       
                                                    </tr>
                                                </tbody>
                                          
                                                <?php }  ?>
                                                <h2>Moyenne G??n??rale : <?php echo sprintf("%.02f",($moy/$AllCoef)) ?></h2>

                                                <?php }  ?>


                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                  
                   
   
   


                        <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>

                        <script>
    $('.btn-del').on('click', function(e) {
      e.preventDefault();
      const href = $(this).attr('href')
      Swal.fire({
        title: '??tes - vous s??r ? ',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimez-le!'
      }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }
      })

    })
  </script>

<script src="../platforme/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
                        <script src="../platforme/js/classe.js" type="text/javascript">
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
            message: "Bienvenue dans <b> l'administrateur du syst??me de gestion scolaire</b> - un magnifique syst??me pour g??rer votre ??cole.."

        }, {
            type: 'success',
            timer: 3000
        });

    });
</script>

</html>

