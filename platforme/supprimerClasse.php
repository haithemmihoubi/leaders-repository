<?php
require_once"connexion.php";
if(isset($_GET['delete'])) 
{
    session_start();
    $ref=$_GET['delete'];
    $sql="DELETE FROM  classe WHERE id_classe='$ref'";
    $sql2="DELETE FROM  etudiant WHERE id_classe='$ref'";
    
    $res=$cnx->exec($sql);
    $res2=$cnx->exec($sql2);



   
   header("location:crudClasse.php");
 } 
 ?>