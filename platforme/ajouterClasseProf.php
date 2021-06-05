
<?php 
require_once"connexion.php";

$nom_classe="";
$cin_prof="";
$id_classe="";

if(isset($_POST['save']))
   {
       $cin_prof=htmlspecialchars($_POST['cin_prof']);
       $id_classe=htmlspecialchars($_POST['id_classe']);
       $mat = $cnx->query("SELECT nom_classe FROM classe where id_classe='$id_classe'");
       $nom_classe = $mat->fetchColumn();

       $verife2=$cnx->query("SELECT cin_prof FROM classe_prof WHERE cin_prof='$cin_prof' and nom_classe='$nom_classe'");
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
         swal(" l'enseignant n'existe pas dans la platforme , impossible d'ajouter la classe  !!!");
     </script>
     <?php
     }
     else
     {
   $sql="INSERT INTO classe_prof (cin_prof,nom_classe,id_classe) VALUES ('$cin_prof','$nom_classe','$id_classe')";
   $res=$cnx->exec($sql);
  
    if($res)
    {
       ?>
       <script>
		    swal("Classe !", "a été ajouter au prof !", "success")
</script>
<?php

}

  
    }
?>
<?php

}
?>