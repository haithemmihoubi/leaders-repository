
<?php 
require_once"connexion.php";
$nom_matiere="";
$lienCour="";
$nomCour="";
$id_matiere="";
$nom_enseignant="admin";




if(isset($_POST['save']))
   {
       
       $nomCour=htmlspecialchars($_POST['nomCour']);
       $id_matiere=htmlspecialchars($_POST['id_matiere']);
       $lienCour = $_FILES['lienCour']['name'];
       $target = "Cour/lienCour/";
        
        $mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
        $nom_matiere = $mat->fetchColumn();
     


   $sql="INSERT INTO cour (nom_matiere,lienCour,nomCour,nom_enseignant,id_matiere) VALUES ('$nom_matiere', '$lienCour','$nomCour','$nom_enseignant','$id_matiere')";
   $res=$cnx->exec($sql);
  
    if($res)
    {
       ?>
       <script>
		    swal("Cour!", "a été ajouter!", "success")
</script>
<?php
    }
?>
<?php
}
?>