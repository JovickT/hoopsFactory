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
    <title>Entreprises</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../../index.php"><img class="sizeIcon" src="../../assets/img/logo.png" alt="Logo"></a>
        </div>
        <hr class="horizontal-line">
        <h1 class="textColor text-center mb-5">ENTREPRISES</h1>

        <div>
            <h1 class="textColor text-center mb-5">CDF 3X3 ENTREPRISE</h1>
            <h3 class="textColor mb-5">Coupe De France 3x3 Entreprise </h3>
            <p class="textColor mb-3">C'est le moment de troquer son costume pour enfiler son meilleur ensemble de sport ! </p>
            <p class="textColor mb-3">Mobilisez vos collègues, créez votre équipe et venez participer à nos tournois entreprises :</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Défendez les couleurs de votre entreprise.</li>
                <li style="list-style: square;" class="textColor">Tentez de gagner des titres et des cadeaux avec vos collègues.</li>
                <li style="list-style: square;" class="textColor">Partagez un moment de convivialité.</li>
                <li style="list-style: square;" class="textColor">Créez des liens professionnels autour du basket.</li>
                <li style="list-style: square;" class="textColor">Un titre de champion de France à gagner</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
                <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="contact-cdf" href="../contact.php">CONTACTEZ-NOUS</a>
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