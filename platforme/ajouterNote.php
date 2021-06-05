
<?php 
require_once"connexion.php";
$cin_etudiant="";
$nom_matiere="";
$note_dc="";
$note_ds="";
$note_np="";
$id_matiere="";


if(isset($_POST['save']))
   {

       $cin_etudiant=htmlspecialchars($_POST['cin_etudiant']);
       $id_matiere=htmlspecialchars($_POST['id_matiere']);
       $note_dc=htmlspecialchars($_POST['note_dc']);
       $note_ds=htmlspecialchars($_POST['note_ds']);
       $note_np=htmlspecialchars($_POST['note_np']);

      /*
      $coef = $cnx->query("SELECT coef FROM matiere where nom_matiere='$nom_matiere'");
      $r = $coef->fetchColumn();
      $cof = (float)$r;
      */
          
      $mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
      $nom_matiere = $mat->fetchColumn();
      

      if($note_np=="")
      {
         $moyenne =(($_POST['note_ds']*2)+$_POST['note_dc'])/3;
      }
      else
      {  
      $moyenne =(($_POST['note_ds']*2)+$_POST['note_dc']+$_POST['note_np'])/4;
       }

$verife2=$cnx->query("SELECT  nom_matiere FROM note WHERE cin_etudiant='$cin_etudiant' and nom_matiere='$nom_matiere'");
$verife=$cnx->query("SELECT  cin FROM etudiant WHERE cin='$cin_etudiant'");
//$verife3=$cnx->query("SELECT  etudiant.cin,etudiant.niveau FROM etudiant   INNER JOIN matiere_niveau  where etudiant.cin='$cin_etudiant' and  matiere_niveau.nom_matiere=$nom_matiere  and matiere_niveau.niveau=etudiant.niveau");
//if($verife3->rowCount()>0) 
//{
if($verife->rowCount()>0) 
{
   if($verife2->rowCount()>0)
   {?>

      <script>
		    swal("La Note est déjà ajoutée!!");
      </script>
  <?php 
  }
  else
  {
   $sql="INSERT INTO note (cin_etudiant,nom_matiere,note_dc,note_ds,note_np,moyenne,id_matiere) VALUES ('$cin_etudiant', '$nom_matiere','$note_dc','$note_ds','$note_np','$moyenne','$id_matiere')";
   $res=$cnx->exec($sql);
   if($res)
   {
      ?>
      <script>
         swal("Note Etudiant!", "a été ajouter!", "success")
</script>
<?php
   }

   }
}
else
{
  ?>
  <script>
         swal("Etudiant n'existe pas ! Verifier Numéro Cin");
</script>
<?php 

}


   }
?>
 
  
  