<?php
require_once"connexion.php";
if(isset($_GET['delete'])) 
{
    session_start();
    $ref=$_GET['delete'];
    $ref2=$_GET['val'];

    $sql="DELETE FROM  etudiant WHERE cin='$ref'";
    $sql2="DELETE FROM  note WHERE cin_etudiant='$ref2'";
    $sql3="DELETE FROM  bulletin WHERE cin_etudiant='$ref2'";
    

    $res=$cnx->exec($sql2);
    $res=$cnx->exec($sql);
    $res=$cnx->exec($sql3);






   
   header("location:Etudiant.php");
 } 
 ?>