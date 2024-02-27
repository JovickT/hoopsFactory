<?php
    session_start();
    require_once '../../src/classes/Display.php';
    //appelle de la class Display qui va permettre l'affichage du nom et de la description des jeux de la catégorie Plusieurs
    $solo = new Display($pdo);
    $type = $solo -> displayTypeDeJeux("a plusieurs");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>A plusieurs</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        <hr class="horizontal-line">
        <h1 class="textColor text-center mb-5">A PLUSIEURS</h1>

        <div class="d-flex mb-5" style="width: 100%">
            <?php
                //permet d'accéder à la bonne page en fonction du jeux. la variable page récupère le chemin d'accès à celle-ci

                for ($i=0; $i < count($type[0]) ; $i++) { 

                    switch ($type[0][$i]["nom"]) {
                        case 'RÉSERVER UN TERRAIN':
                            $page = "plusieurs/terrain.php";
                            break;
                        case 'LEAGUES':
                            $page = "plusieurs/leagues.php";
                            break;
                        case 'TOURNOIS':
                            $page = "plusieurs/tournoi.php";
                            break;
                        default:
                            echo 'aucune page à ce nom';
                            break;
                    } 

                    ?>
                        <div class="d-flex flex-column justify-content-center mx-3 typeJeux">
                            
                                <div style="border: 2px solid #fff; padding: 5%; border-radius: 20px;">
                                    <a href="<?php echo $page; ?>">
                                        <h3 class="text-typeJeux textColor"><?php echo $type[0][$i]["nom"]; ?></h1>
                                        <img class="sizeIcon" src="../assets/img/arrow_rigth.png" alt="arrow-rigth">
                                    </a>
                                </div>
                            
                            <p class="mt-3" style="font-weight: bold;"><?php echo $type[0][$i]["description"]; ?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
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
                    //permet d'accéder  un page qui permet de réserve si la connnexion à été effectué ou non
                    if(isset($_SESSION['nom'])){
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="plusieurs/terrain.php">RÉSERVER UN TERRAIN</a>
                        <?php
                    }else{
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="connexion.php?page=terrain">RÉSERVER UN TERRAIN</a>
                        <?php
                    }
                ?>
            </div>
            <div class="text-center mb-5">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
        </div>
        <div>
            <h1 class="textColor text-center mb-5">LEAGUES</h1>
            <h3 class="textColor mb-5">HOOPS LEAGUE, C'EST QUOI ?</h3>
            <p class="textColor mb-3">Envie de former une équipe avec tes potes et défier les basketteurs de ta région ?</p>
            <p class="textColor mb-3"> Grâce aux Hoops Factory Basketball Leagues, c'est possible :</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Deux formats de jeu : League 5x5 et League 3x3.</li>
                <li style="list-style: square;" class="textColor"> 6 à 12 équipes par League.</li>
                <li style="list-style: square;" class="textColor">12 semaines de compétition + Playoffs + Finales.</li>
                <li style="list-style: square;" class="textColor">Résultats en classement en ligne et sur nos réseaux sociaux.</li>
                <li style="list-style: square;" class="textColor">Des matchs filmés (en fonction des centres).</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
                <li style="list-style: square;" class="textColor">Un espace lounge pour refaire le match entre potes en profitant de l'espace bar et snacking.</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
                <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="contact-leagues" href="contact.php">CONTACTEZ-NOUS</a>
            </div>
            <div class="text-center mb-5">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
        </div>
        <div>
            <h1 class="textColor text-center mb-5">TOURNOI</h1>
            <h3 class="textColor mb-5">Prépare ta team !</h3>
            <p class="textColor mb-3">Forme ta team et viens participer aux différents tournois organisés par la Hoops Factory.</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">Plusieurs formats proposés (1v1 / 3v3 / 5v5)</li>
                <li style="list-style: square;" class="textColor">Pour tous les âges et tous les niveaux de pratique.</li>
                <li style="list-style: square;" class="textColor">De nombreux lots à gagner (Hoops Training Pass, Pick-up Games, Dotations Jordan...) </li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
                <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="contact-tournoi" href="contact.php">CONTACTEZ-NOUS</a>
            </div>
            <div class="text-center mb-5">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
        </div>
    </div>

    <script src="../services/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>