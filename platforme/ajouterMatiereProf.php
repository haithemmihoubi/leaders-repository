
<?php 
require_once"connexion.php";

$nom_matiere="";
$cin_prof="";
$id_matiere="";

if(isset($_POST['save']))
   {
       $cin_prof=htmlspecialchars($_POST['cin_prof']);
       $id_matiere=htmlspecialchars($_POST['id_matiere']);
       $mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
       $nom_matiere = $mat->fetchColumn();

       $verife2=$cnx->query("SELECT cin_prof FROM matiere_prof WHERE cin_prof='$cin_prof' and nom_matiere='$nom_matiere'");
       $verife=$cnx->query("SELECT cin FROM enseignant WHERE cin='$cin_prof'");


       


       if($verife2->rowCount()>0) 
       {?>
         <script> 
         swal(" c'déja ajoutér  !!!");
     </script>
     <?php
     }
       else if($verife->rowCount()==0) 
       {?>
         <script>
         swal(" l'enseignant n'existe pas dans la platforme , impossible d'ajouter la matière  !!!");
     </script>
     <?php
     }
     else
     {
   $sql="INSERT INTO matiere_prof (cin_prof,nom_matiere,id_matiere) VALUES ('$cin_prof','$nom_matiere','$id_matiere')";
   $res=$cnx->exec($sql);
  
    if($res)
    {
       ?>
       <script>
		    swal("Matiere !", "a été ajouter au prof !", "success")
</script>
<?php

}

  
    }
?>
<?php

}
?>