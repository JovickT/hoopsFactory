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
            <h1 class="textColor text-center mb-5">CAMPS</h1>
            <h3 class="textColor mb-5">HOOPS FACTORY BASKETBALL CAMPS</h3>
            <h3 class="textColor mb-5">Intro To Hoops (débutant)</h3>
            <p class="textColor mb-3">Un camp de basket pendant les vacances scolaires, quoi de mieux pour votre enfant ?</p>
            <p class="textColor mb-3">Avec les Hoops Factory Basketball Camps Intro To Hoops on a de quoi leur faire plaisir !</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Stage de 5 jours pendant les vacances scolaires.</li>
                <li style="list-style: square;" class="textColor">Pour les apprentis basketteuses et basketteurs de 6 à 15 ans.</li>
                <li style="list-style: square;" class="textColor"> Une équipe d'entraîneurs diplômés d'État.</li>
                <li style="list-style: square;" class="textColor">Possibilité de restauration sur place, avec un menu adapté à la pratique de l'activité physique.</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
            </ul>
            <h3 class="textColor mb-5">Player Development (confirmé)</h3>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Stage de 5 jours pendant les vacances scolaires.</li>
                <li style="list-style: square;" class="textColor">Pour les basketteuses et basketteurs non-débutants de 12 à 18 ans.</li>
                <li style="list-style: square;" class="textColor">Des coachs spécialisés dans le travail individuel pour progresser sur des aspects ciblés du jeu.</li>
                <li style="list-style: square;" class="textColor">Possibilité de restauration sur place, avec un menu adapté à la pratique de l'activité physique.</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
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
