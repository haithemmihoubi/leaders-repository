<?php
require_once"connexion.php";
if(isset($_GET['delete'])) 
{
    session_start();
    $ref=$_GET['delete'];
    $val2=$_GET['val2'];
    $sql="DELETE FROM  note WHERE cin_etudiant='$ref' and nom_matiere='$val2'";
    $res=$cnx->exec($sql);


   
   header("location:Etudiant.php");
 } 
 ?>