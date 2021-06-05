
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
    <link href="../assets/css/cour.css">

    <title>Details Produit</title>
    <link href="/assets/css/details.css" rel="stylesheet" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </head>
 
  <body>
	<?php
require_once 'connexion.php';
$id_ensignant=$_GET['detaile'];
$sql="SELECT * FROM enseignant WHERE cin='$id_ensignant'";
if($id_ensignant)
{
$resultat=$cnx->query($sql);
while($row=$resultat->fetch())
{
?>
          <h2 style="text-align: center; margin-top:1em; color:cornflowerblue">Détails Enseignant</h2>

	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">

						  <div class="tab-pane active" id="pic-1"><img src="images/imageEnseignant/<?php echo $row['imageEnseignant'];?>" ></div>
						
						</div>
					
						
					</div>
                  

					<div class="details col-md-6">
						<h5 style="font-weight: bold;" > Nom : <?php echo $row['nom'];?></h5>
		
            <br>

                                <h5 style="font-weight: bold;">Prenom : <?php echo $row['prenom']; ?> </h5>    
               
                                   
   

                        <br>

                        <h5 style="font-weight: bold;"> CIN : <?php echo $row['cin'];?></h3>

					
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
