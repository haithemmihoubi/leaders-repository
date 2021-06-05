<?php
    $conn = mysqli_connect("localhost", "root", "" , "blog"); 
    if(!$conn){
        echo "base de donnee connecte" . mysqli_connect_error(); 
    }
