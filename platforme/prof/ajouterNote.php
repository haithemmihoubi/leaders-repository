
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
             

       
       $mat = $cnx->query("SELECT nom_matiere FROM matiere where id_matiere='$id_matiere'");
       $nom_matiere = $mat->fetchColumn();
       


       $res1=$cnx->query("SELECT  nom_classe FROM etudiant WHERE cin='$cin_etudiant'");
       $res2=$cnx->query("SELECT  nom_classe FROM classe_prof WHERE cin_prof='$res'");
       
       $r1 = $res1->fetchColumn();
       $r2 = $res2->fetchColumn();
       

/*
       $coef = $cnx->query("SELECT coef FROM matiere where nom_matiere='$nom_matiere'");
       $r = $coef->fetchColumn();
       $cof = (float)$r;
 
 */
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

if($r1==$r2)
{
if($verife->rowCount()>0) 
{
   if($verife2->rowCount()>0)
   {?>

      <script>
		    swal("La Note est déjà ajoutée");
      </script>
  <?php 
  }
  else
  {
   $sql="INSERT INTO note (cin_etudiant,nom_matiere,note_dc,note_ds,moyenne,note_np,id_matiere) VALUES ('$cin_etudiant', '$nom_matiere','$note_dc','$note_ds','$moyenne','$note_np','$id_matiere')";
   $resu=$cnx->exec($sql);
   if($resu)
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
else
{
   ?>
   <script>
          swal("Cet étudiant n'est pas inscrit dans cette classe Impossible de l'ajouter");
 </script>
 <?php 
 
 }
}   
?>
 

  