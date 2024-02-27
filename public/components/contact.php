<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Contact</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        <h1 class="textColor text-center mb-5">NOS COORDONNÉES</h1>
        <div class="d-flex justify-content-around">
            <div style="width: 15%;">
                <h6 class="textColor text-center">NOTRE CENTRE HF PARIS</h6>
                <P class="textColor text-center">3 Rue Pierre Larousse 93300 Aubervilliers +33172598899 paris@hoopsfactory.com</P>
                <div class="d-flex">
                    <img class="sizeIcon mx-2" src="../assets/img/youtube.png" alt="youtube">
                    <img class="sizeIcon mx-2" src="../assets/img/instagram.png" alt="instagram">
                    <img class="sizeIcon mx-2" src="../assets/img/twitter.png" alt="twitter">
                    <img class="sizeIcon" src="../assets/img/linkedin.png" alt="linkedin">
                </div>
            </div>
            <div>
                <img src="../assets//img/carte-hoops.png" alt="carte" style="margin-left: 18%;">
            </div>
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-around">
                    <h6 class="textColor" style="width: 15%; text-align: center;">NOTRE CENTRE HF LILLE</h6>
                    <P class="textColor" style="width: 24%; text-align: center;">11 Rue Louis Braille 59370 Mons-en-Barœul +33320479446 lille@hoopsfactory.com</P>
                </div>
                <div class="d-flex justify-content-around">
                    <h6 class="textColor" style="width: 15%; text-align: center;">NOTRE CENTRE HF TOULOUSE</h6>
                    <P class="textColor" style="width: 24%; text-align: center;">2 Rue de l'Égalité 31200 Toulouse +33567339306 toulouse@hoopsfactory.com</P>
                </div>
                <div class="d-flex justify-content-around">
                    <h6 class="textColor" style="width: 15%; text-align: center;">NOTRE CENTRE HF BORDEAUX</h6>
                    <P class="textColor" style="width: 24%; text-align: center;">9 Rue Dumont d'Urville 33300 Bordeaux +33533091568 bordeaux@hoopsfactory.com</P>
                </div>
                <div class="d-flex justify-content-around">
                    <h6 class="textColor" style="width: 15%; text-align: center;">NOTRE CENTRE HF CLERMONT</h6>
                    <P class="textColor" style="width: 24%; text-align: center;">28 Rue des Sauzes 63170 Aubière +33473902497 clermont@hoopsfactory.com</P>
                </div>
            </div>
        </div>
        <hr class="horizontal-line">
        <div>
            <h1 class="textColor text-center mb-5">NOUS CONTACTER</h1>
            <p class="textColor text-center mb-5">Remplis ce formulaire pour contacter l'équipe Hoops Factory.</p>
         
            <form  action="contact.php" method="post">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom*" class="mb-3">
                    <input type="text" name="nom" id="nom" placeholder="Nom*" class="mb-3">
                    <input type="email" name="email" id="email" placeholder="email*" class="mb-3">
                    <input type="text" name="message" id="message" placeholder="Message*" class="mb-3" style="height: 100px;">
                    <div class="d-flex justify-content-cennter">
                        <input type="checkbox" name="cgu" id="cgu" style="width: 2%">
                        <p class="textColor mx-3">JE DÉCLARE AVOIR PRIS CONNAISSANCE ET ACCEPTE LES CONDITIONS GÉNÉRALES</br> D’UTILISATION 
                        DU SITE HOOPSFACTORY.COM ET LA POLITIQUE DE CONFIDENTIALITÉ DE</br> HOOPS FACTORY*
                        LIRE LA POLITIQUE DE CONFIDENTIALITÉ DE HOOPS FACTORY</p>
                    </div>
                    <button style="width: 20%; padding: 1% 3%;" class="d-flex justify-content-center mon-btn mb-3" id="connexion" type="submit" disabled>Envoyer</button>
                </div>
            </form>
        </div>
      
    </div>
    <script src="../services/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
