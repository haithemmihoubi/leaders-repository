<?php
require_once"connexion.php";
if(isset($_GET['delete'])) 
{
    session_start();
    $ref=$_GET['delete'];
    $sql="DELETE FROM  cour WHERE id_cour='$ref'";
    $res=$cnx->exec($sql);
   header("location:cour.php");
 } 
 ?>