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
    <title>A plusieurs</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../../index.php"><img class="sizeIcon" src="../../assets/img/logo.png" alt="Logo"></a>
        </div>
        <hr class="horizontal-line">
        <h1 class="textColor text-center mb-5">A PLUSIEURS</h1>
        <div>
            <h1 class="textColor text-center mb-5">RÉSERVER UN TERRAIN</h1>
            <h3 class="textColor mb-5">HOOPS FREE, C'EST QUOI ?</h3>
           
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Choisis ton terrain : full court 5x5 (15 joueurs maximum) ou half court 3x3 (9 joueurs maximum).</li>
                <li style="list-style: square;" class="textColor">Choisis ton horaire : une heure de jeu (et plus) sans temps mort.</li>
                <li style="list-style: square;" class="textColor"> Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
                <li style="list-style: square;" class="textColor">Des matchs filmés (en fonction des centres).</li>
                <li style="list-style: square;" class="textColor">Un espace lounge pour refaire le match entre potes en profitant de l'espace bar et snacking.</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
            <?php
                    if(isset($_SESSION['nom'])){
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="../reservation-pickup.php?res=terrain">RÉSERVER UN TERRAIN</a>
                        <?php
                    }else{
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="../connexion.php?page=reservation-pickup">RÉSERVER UN TERRAIN</a>
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
