<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header style="color:#66d7fd">Chatter maintenant</header>
            <form action="#" enctype="multipart/form-data " autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input ">
                        <label>Prénom</label>
                        <input type="text" name="fname" placeholder="Prenom" required>
                    </div>
                <div class="field input ">
                    <label>Nom</label>
                    <input type="text" name="lname" placeholder="Nom" required>
                </div>
                </div>
                <div class="field input">
                    <label>Adresse Email</label>
                    <input type="text" name="email"   placeholder="Entrer votre adresse email" required>
                </div>
                <div class="field input">
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Entrer un nouveau mot de passe " required>
                    <i  style="color:#66d7fd" class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Selectionnez une image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit"  style="background-color:#66d7fd" value="Continuer pour le chat">
                </div>
            </form>
            <div class="link"> Déja inscrit ?  <a  style="color:#66d7fd" href="login.php">Connectez-vous</a></div>
        </section>
    </div>

<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>



</body>

</html>