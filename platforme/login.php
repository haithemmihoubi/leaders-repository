<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../platforme/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="height:600px;  background-repeat:no-repeat; background-image:url('images/etudiant.png')">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenue </h1>
                                    </div>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="login100-form validate-form">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" id="exampleInputEmail" type="password" name="username" placeholder="Entrer votre CIN">
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">
                                            Se Connecter
                                        </button>
                                        <hr>

                                    </form>
                                    <?php
                                    if (isset($_GET['etat'])) {
                                        $etat = $_GET['etat'];
                                        switch ($etat) {
                                            case 1:
                                                echo "<script>alert('vous devez vous authentifier avant')</script>";
                                                break;
                                            case 2:
                                                echo "<script>alert('Merci Pour Votre Visite')</script>";
                                                break;
                                            case 3:
                                                echo "<script>alert('login et/ou mot de passe sont incorrects!!')</script>";
                                                break;
                                        }
                                    }

                                    ?>
                                    <?php
                                    session_unset();
                                    require_once 'connexion.php';


                                    if (isset($_POST['login'])) {
                                        $username = htmlspecialchars($_POST['username']);
                                        $password = htmlspecialchars($_POST['password']);
                                        $verife = $cnx->query("SELECT  cin FROM etudiant WHERE cin='$username'");
                                        $verife2 = $cnx->query("SELECT  cin FROM enseignant WHERE cin='$username'");


                                        if ($username === 'Admin123') {
                                            $_SESSION['username'] = $username;
                                            header('location:index.php');
                                        } else if ($verife->rowCount() > 0) {
                                            $_SESSION['login'] = $username;
                                            header('location:./etudiant/indexEtudiant.php');
                                        } else if ($verife2->rowCount() > 0) {
                                            $_SESSION['login'] = $username;
                                            header('location:./prof/indexProf.php');
                                        } else {
                                            header('location:login.php?etat=3');
                                        }
                                    }



                                    ?>

                                </div>
                            </div>
                        </div>
                        <a href="./index.php" style="margin-left:320px;margin-bottom:230px"><button type="button" class="btn btn-outline-primary"> <img src="https://img.icons8.com/fluent/30/000000/smart-home-automation.png" style="margin-right:13px;" />Retourner vers la page d'accueil</button></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../platforme/vendor/jquery/jquery.min.js"></script>
    <script src="../platforme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../platforme/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../platforme/js/sb-admin-2.min.js"></script>

</body>

</html>