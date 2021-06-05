
<?php 
require_once"connexion.php";

$nom_classe="";

if(isset($_POST['save']))
   {
       $nom_classe=htmlspecialchars($_POST['nom_classe']);

       $verife=$cnx->query("SELECT  nom_classe FROM classe WHERE nom_classe='$nom_classe'");
       if($verife->rowCount()>0) 
       {?>
         <script>
         swal(" Classe c'déja ajoutér !!!");
     </script>
     <?php
     }
     else
     {
   $sql="INSERT INTO classe (nom_classe) VALUES ('$nom_classe')";
   $res=$cnx->exec($sql);
  
    if($res)
    {
       ?>
       <script>
		    swal("Classe!", "a été ajouter!", "success")
</script>
<?php

}

  
    }
?>
<?php

}
?>