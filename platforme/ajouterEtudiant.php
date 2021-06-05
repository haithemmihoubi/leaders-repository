
<?php 
require_once"connexion.php";
$nom="";
$prenom="";
$date_naiss="";
$cin="";
$imageEtudiant="";
$nom_classe="";
$id_classe="";


if(isset($_POST['save']))
   {
    //session_start();
       $nom=htmlspecialchars($_POST['nom']);
       $prenom=htmlspecialchars($_POST['prenom']);
       $date_naiss=htmlspecialchars($_POST['date_naiss']);
       $cin=htmlspecialchars($_POST['cin']);
       $id_classe=htmlspecialchars($_POST['id_classe']);

       $cl = $cnx->query("SELECT nom_classe FROM classe where id_classe='$id_classe'");
       $nom_classe = $cl->fetchColumn();

       
       $target = "images/imageEtudiant/".basename($imageEtudiant);
       $imageEtudiant = $_FILES['imageEtudiant']['name'];

       $verife=$cnx->query("SELECT  cin FROM etudiant WHERE cin='$cin'");
       if($verife->rowCount()>0) 
       {?>
         <script>
         swal(" Impossible !!!");
     </script>
     <?php
     }
     else
     {

   $sql="INSERT INTO etudiant (nom,prenom,date_naiss,cin,imageEtudiant,nom_classe,id_classe) VALUES ('$nom', '$prenom','$date_naiss','$cin','$imageEtudiant','$nom_classe','$id_classe')";
   $res=$cnx->exec($sql);
  

    if($res)
    {
       ?>
       <script>
		    swal("Etudiant!", "a été ajouter!", "success")
</script>
<?php

}

  
    }
?>
<?php

}
?>