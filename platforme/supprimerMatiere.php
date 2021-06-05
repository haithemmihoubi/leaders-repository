<?php
require_once"connexion.php";
if(isset($_GET['delete'])) 
{
    session_start();
    $ref=$_GET['delete'];
    $sql="DELETE FROM  matiere WHERE id_matiere='$ref'";
    $sql2="DELETE FROM  cour WHERE id_matiere='$ref'";
    $sql3="DELETE FROM  note WHERE id_matiere='$ref'";
    $sql3="DELETE FROM  seancecours WHERE id_matiere='$ref'";
    

    
    
    $res=$cnx->exec($sql);
    $res2=$cnx->exec($sql2);
    $res3=$cnx->exec($sql3);
    


   
   header("location:crudMatiere.php");
 } 
 ?>