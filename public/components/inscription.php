<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        <div class="d-flex justify-content-center container">
            <div class="d-flex flex-column drap">
                <h1 style="font-weight: bold; text-align: center" class="textColor">Crée ton compte.</h1>
                <form action="connexion.php?page=index" method="post">
                    <div class="d-flex flex-column">
                        <input class="mb-3" type="text" name="firstname" id="prenom" placeholder="Prénom*" required>
                        <input class="mb-3" type="text" name="name" id="nom" placeholder="Nom*" required>
                        <input class="mb-3" type="text" name="tel" id="telephone" placeholder="Téléphone*" required>
                        <input class="mb-3" type="email" name="couriel" id="email" placeholder="Email*" required>
                        <input class="mb-3" type="date" name="date" id="date" placeholder="jj/mm/aaaa" required>
                        <input class="mb-5" type="password" name="password" id="password" placeholder="Password*" required>
                        <button class="d-flex justify-content-center mon-btn mb-3" type="submit">JE CRÉE MON COMPTE</button>
                        <a style="text-align: center" class="textColor link-offer" href="connexion.php?page=index">Tu as déjà un compte ? Se connecter</a>
                    </div>
                  <?php
                    ?>
                </form>
            </div>
           
        </div>
    </div>
    <script src="../services/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

