<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location:users.php");
}
?>
<?php include_once "header.php"; ?>

<body>

    <div class="wrapper">
        <section class="form login">
            <header style="color:#66d7fd">Connectez-vous</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>

                <div class="field input">
                    <label>Adresse Email</label>
                    <input type="text" name="email" placeholder="Entrer votre adresse email">
                </div>
                <div class="field input">
                    <label>Mot de passe </label>
                    <input type="password" name="password" placeholder="Entrer votre mot de passe ">
                    <i style="color:#66d7fd" class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" style="background-color:#66d7fd" value="Continuer pour le chat">
                </div>
            </form>
            <div class="link"> Pas encore inscrit ? <a href="index.php" style="color:#66d7fd">Inscrivez-vous maintenant</a></div>

        </section>
        <a href="../index.php" style="margin-left:110px;margin-bottom:230px;"><button type="button" style="background-color:#66d7fd" class=" btn btn-outline-primary"> <img src="https://img.icons8.com/fluent/30/000000/smart-home-automation.png" style="margin-right:13px;" />Retourner vers la page d'accueil</button></a>

    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

</body>

</html>