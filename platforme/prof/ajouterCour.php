

<?php 
require_once 'connexion.php';

$nom_matiere="";
$lienCour="";
$nomCour="";
$id_matiere="";


$cin="";

$result2 = $cnx->query("SELECT DISTINCT(prenom)  FROM enseignant where cin='$res'");

$result = $cnx->query("SELECT DISTINCT(nom)  FROM enseignant where cin='$res'");
$r = $result->fetchColumn();
$r2 = $result2->fetchColumn();






if(isset($_POST['save']))
   {
       $id_matiere=htmlspecialchars($_POST['id_matiere']);
       $nomCour=htmlspecialchars($_POST['nomCour']);

       $lienCour = $_FILES['lienCour']['name'];
       $target = "Cour/lienCour/";

       $cin=$_SESSION['login'];

       
        $mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
        $nom_matiere = $mat->fetchColumn();

   $sql="INSERT INTO cour (nom_matiere,lienCour,nomCour,nom_enseignant,id_matiere) VALUES ('$nom_matiere', '$lienCour','$nomCour','$r $r2','$id_matiere')";
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