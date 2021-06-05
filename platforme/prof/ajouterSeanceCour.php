

<?php 
require_once 'connexion.php';

$nom_matiere="";
$lienCour="";
$id_matiere="";
$nom_matiere="";
$duree="";
$date="";


$cin="";

$result2 = $cnx->query("SELECT DISTINCT(prenom)  FROM enseignant where cin='$res'");

$result = $cnx->query("SELECT DISTINCT(nom)  FROM enseignant where cin='$res'");
$r = $result->fetchColumn();
$r2 = $result2->fetchColumn();

$mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
$nom_matiere = $mat->fetchColumn();




if(isset($_POST['save']))
   {
       $id_matiere=htmlspecialchars($_POST['id_matiere']);
       $date=htmlspecialchars($_POST['dateDebut']);
       $duree=htmlspecialchars($_POST['duree']);

       $lienCour = $_FILES['lienCour']['name'];
       $target = "Cour/lienCour/";

       $cin=$_SESSION['login'];

       
        $mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
        $nom_matiere = $mat->fetchColumn();

   $sql="INSERT INTO seancecours (nom_matiere,lienCour,nom_prof,id_matiere,dateDebut,duree,cin_enseignant) VALUES ('$nom_matiere', '$lienCour','$r $r2','$id_matiere','$date','$duree','$res')";
   $res=$cnx->exec($sql);
  
    if($res)
    {
       ?>
       <script>
		    swal("Seance Cour!", "a été ajouter!", "success")
</script>
<?php
    }
?>
<?php
}
?>