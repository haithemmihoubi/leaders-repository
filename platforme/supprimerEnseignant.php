<?php
require_once"connexion.php";
if(isset($_GET['delete'])) 
{
    session_start();
    $ref=$_GET['delete'];
    $sql="DELETE FROM  enseignant WHERE cin='$ref'";
    $sq2="DELETE FROM  classe_prof WHERE cin_prof='$ref'";
    
    $res=$cnx->exec($sql);
    $res=$cnx->exec($sq2);
    


   
   header("location:enseignant.php");
 } 
 ?>