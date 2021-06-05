
<?php 
require_once"connexion.php";
$nom="";
$prenom="";
$cin="";
$imageEnseignant="";

if(isset($_POST['save']))
   {
    //session_start();

       $nom=htmlspecialchars($_POST['nom']);
       $prenom=htmlspecialchars($_POST['prenom']);
       $cin=htmlspecialchars($_POST['cin']);
       
       $target = "images/imageEnseignant/".basename($imageEnseignant);
       $imageEnseignant = $_FILES['imageEnseignant']['name'];

       $verife=$cnx->query("SELECT  cin FROM enseignant WHERE cin='$cin'");
       if($verife->rowCount()>0) 
       {?>
         <script>
         swal(" Impossible !!!");
     </script>
     <?php
     }
     else
     {
   $sql="INSERT INTO enseignant (nom,prenom,cin,imageEnseignant) VALUES ('$nom', '$prenom','$cin','$imageEnseignant')";
   $res=$cnx->exec($sql);
  
    if($res)
    {
       ?>
       <script>
		    swal("Enseignant!", "a été ajouter!", "success")
</script>
<?php

}

  
    }
?>
<?php

}
?>