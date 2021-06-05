<?php
require_once 'connexion.php';
session_start();


if(!(isset($_SESSION['username']) && $_SESSION['username']=='Admin123'))
{
    header('location:login.php?etat=1');   
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Details Produit</title>
    <link href="../platforme/assets/css/details.css" rel="stylesheet" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </head>


  <body>
	<?php
require_once 'connexion.php';
$id_etudiant =$_GET['detaile'];
$sql="SELECT * FROM etudiant WHERE cin  ='$id_etudiant'";
if($id_etudiant)
{
$resultat=$cnx->query($sql);
while($row=$resultat->fetch())
{
?>
          <h2 style="text-align: center; margin-top:1em; color:cornflowerblue">Détails Etudiant</h2>

	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">

						  <div class="tab-pane active" id="pic-1"><img src="images/imageEtudiant/<?php echo $row['imageEtudiant'];?>" ></div>
						
						</div>
					
						
					</div>
                  

					<div class="details col-md-6">
          <br>
						<h5 style="font-weight: bold;" > Nom : <?php echo $row['nom'];?></h5>
		
            <br>

                                <h5 style="font-weight: bold;">Prenom : <?php echo $row['prenom']; ?> </h5>    
               
                                   
   

<br>
                        <h5 style="font-weight: bold; "> Date de naissance : <?php echo $row['date_naiss'];?></h5>
                        <br>

                        <h5 style="font-weight: bold;"> CIN : <?php echo $row['cin'];?></h3>
                        <br>

                        <h5 style="font-weight: bold;">  classe : <?php echo $row['nom_classe'];?></h3>
                       
                        <div style="margin-left:400px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg>
                    <a href="javascript:window.print()"><button class="btn btn-primary" style="width: 220px; height:40px; margin-right:70px; font-size:15px">Impression Détails Etudiant </button></a>
                </div>


					
                        <br>
                     
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <?php
}
}
?>

  </body>
</html>
