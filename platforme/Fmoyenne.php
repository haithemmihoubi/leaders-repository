<?php 
require_once"connexion.php";
$cin="";




if(isset($_POST['submit']))
   {
       $cin=htmlspecialchars($_POST['cin']);
    header('location:FormulaireAjouterMoyenneGeneral.php?detaile='.$cin);   
   }
?>   