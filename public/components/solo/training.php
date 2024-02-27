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
    <title>Training pro</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../../index.php"><img class="sizeIcon" src="../../assets/img/logo.png" alt="Logo"></a>
        </div>
        <hr class="horizontal-line">
        <h1 class="textColor text-center mb-3">SOLO</h1>

        <div>
            <h1 class="textColor text-center mb-5">TRAINING PRO</h1>
            <h3 class="textColor mb-5">Tu veux t'entrainer en journée ?</h3>
            <p class="textColor mb-3">Nous avons l'offre qu'il te faut avec le pass Hoops Training Pro !</p>
            <p class="textColor mb-3">Disponible en pass journée, mensuel ou annuel, il te permettra d'avoir : </p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Un accès à un terrain dédié pour du workout individuel du lundi au vendredi toute l’année.</li>
                <li style="list-style: square;" class="textColor"> Une mise à disposition de matériel d'entraînement professionnel.</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
                <li style="list-style: square;" class="textColor">Et parce que c'est encore mieux de s'entraîner avec ses potes,
                 on vous propose de venir accompagné : grâce à votre pass Hoops Training Pro, vous avez la possibilité, chaque jour, de partager votre expérience avec un ami qui aura accès à la Hoops Factory à un tarif préférentiel.</li>
            </ul>
        </div>
        <div>
            <h3 class="textColor mb-5">Machine à shoot (selon des centres)</h3>
            <p class="textColor mb-3">Tu es seul et tu as besoin de travailler ton shoot et d’améliorer ton pourcentage de réussite ? </p>
            <p class="textColor mb-3">La machine à shoot Dr Dish va devenir ton exercice préféré ! </p>
            <p class="textColor mb-3">Elle te permettra de :</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Un accès à un terrain dédié pour du workout individuel du lundi au vendredi toute l’année.</li>
                <li style="list-style: square;" class="textColor"> Une mise à disposition de matériel d'entraînement professionnel.</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
                <li style="list-style: square;" class="textColor">Et parce que c'est encore mieux de s'entraîner avec ses potes,
                 on vous propose de venir accompagné : grâce à votre pass Hoops Training Pro, vous avez la possibilité, chaque jour, de partager votre expérience avec un ami qui aura accès à la Hoops Factory à un tarif préférentiel.</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
                <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="contact-training" href="../contact.php">CONTACTEZ-NOUS</a>
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
