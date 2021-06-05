<?php
session_start(); 
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){

    //verifier siles mail sont validé ou non

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //si l email valide

//verifier si l email existe dans la base de donnée
        $sql = mysqli_query($conn, "SELECT email  FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){ //si l'email existe deja
            echo "$email - Lemail existe deja !!";
        }else{

            //let's check user upload file or not
            if(isset($_FILES['image'])){ //if file is uploaded

                $img_name = $_FILES['image']['name']; //getting user uploaded img name 
                $img_type = $_FILES['image']['type']; //getting user uploaded img type  
                $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder  
           
           
                    //lets explod image and get the last extension like jpg png 

                $img_explode = explode('.',$img_name);
                $img_ext = end($img_explode); //here we got the extensions of an user uploaded img file 
              
              
                $extensions = ['png', 'jpeg', 'jpg']; //these are some valid img ext and we've store them in array 

                    if(in_array($img_ext,$extensions) === true){ // si l'user a telecharger une image avec une extension differente 
                                                                    //à celle de la fonction 
                        $time = time(); 

                        //let's move the user uploaded img to our particular folder 

                        $new_img_name = $time.$img_name; 

                         if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                             $status = "connecté maintenant" ; // le fait qu'un utilisateur est connecté
                             $random_id = rand(time(), 100000000);//creating random id for user 
                        
                                  //let's insert all user data insiide table 

                             $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                   VALUES ({$random_id}, '{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')"); 

                             if($sql2){ //if these data inserted
                            
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'"); 

                                    if(mysqli_num_rows($sql3) >0){
                                         $row = mysqli_fetch_assoc($sql3); 
                                        $_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique_id in other php file
                                        echo "succes";  
                                     }
                               }else{
                            echo " quelque chose est incorrecte";
                        }
                    }

                 }else{

                        echo "s'il vous plait selectionnez une Image - jpeg, jpg, png !"; 
                }

                    }else{
                         echo " s'il vous plait inserez une image file";
                    }

                }

    }else{
        echo "$email - ce mail est invalide !  ";
    }

}else{
    echo "tous les champs sont obligatoires";
}

?>
    