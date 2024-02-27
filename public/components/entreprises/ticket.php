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
            <h1 class="textColor text-center mb-5">PACK D'HEURES/ TICKETS CE</h1>
            <h3 class="textColor mb-5">Pack d'heures</h3>
            <p class="textColor mb-3">Des heures de jeu, payées en avance, avec des créneaux réservés en amont sur une récurrence définie, ou à utiliser comme bon leur semble.</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Solution pour être certain d’avoir son créneau</li>
                <li style="list-style: square;" class="textColor">Les clients peuvent passer par leur CE afin de se faire financer le pack d’heures</li>
                <li style="list-style: square;" class="textColor">Facilite le passage en caisse</li>
                <li style="list-style: square;" class="textColor">Tarifs dégressifs 10h -10% / 30h -15% / 80h -20%</li>
            </ul>
            <h3 class="textColor mb-5">Tickets CE</h3>
            <p class="textColor mb-3">Achetez des tickets et distribuez ou vendez ces bon d'achats de 10€ à vos salariés. Valable sur toutes nos offres excepté le bar durant 1an.</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Possibilité pour l’entreprise de proposer 1 ticket/employé</li>
                <li style="list-style: square;" class="textColor">Le CE paye à la place des clients (il peut le revendre au salarié)</li>
                <li style="list-style: square;" class="textColor">Facilite le passage en caisse</li>
                <li style="list-style: square;" class="textColor">Tarifs dégressifs : 100 tickets = -10%, 250 tickets =-15% et 500 tickets =-20%</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
                <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="contact-ticket" href="../contact.php">CONTACTEZ-NOUS</a>
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