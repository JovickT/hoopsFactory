<?php
    session_start();
    $_SESSION['page']= basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Kids</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../../index.php"><img class="sizeIcon" src="../../assets/img/logo.png" alt="Logo"></a>
        </div>
        <hr class="horizontal-line">
        <h1 class="textColor text-center mb-5">KIDS</h1>
        <div>
            <h1 class="textColor text-center mb-5">BIRTHDAYS</h1>
            <h3 class="textColor mb-5">Un anniversaire 100 % Basket</h3>
            <p class="textColor mb-3">Faites plaisir à votre enfant en organisant son anniversaire dans l'un de nos centres Hoops Factory !</p>
            <p class="textColor mb-3">Le meilleur moyen de faire plaisir à un fan de basketball, avec au programme : </p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">1 partie de basket indoor.</li>
                <li style="list-style: square;" class="textColor">1 goûter avec gâteau d'anniversaire, boissons, bonbons et popcorn dans nos espaces dédiés.</li>
                <li style="list-style: square;" class="textColor"> Forfait pour 10 enfants.</li>
                <li style="list-style: square;" class="textColor">Des matchs filmés (en fonction des centres).</li>
                <li style="list-style: square;" class="textColor"> Nombreuses possibilités de personnalisation de la formule en option.</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
            <?php
                    if(isset($_SESSION['nom'])){
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="../reservation-pickup.php">JE RÉSERVE !</a>
                        <?php
                    }else{
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="../connexion.php?page=reservation-pickup">JE RÉSERVE !</a>
                        <?php
                    }
                ?>
            </div>
            <div class="text-center mb-5">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
        </div>
    </div>
    <script src="../../services/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
