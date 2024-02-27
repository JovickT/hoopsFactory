<?php
    session_start();
    require_once '../../src/classes/Display.php';
    //appelle de la class Display qui va permettre l'affichage du nom et de la description des jeux de la catégorie Solo
    $solo = new Display($pdo);
    $type = $solo -> displayTypeDeJeux("solo");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Solo</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        <hr class="horizontal-line">
        <h1 class="textColor text-center mb-5">SOLO</h1>

        <div class="d-flex mb-5" style="width: 100%">
            <?php
                //permet d'accéder à la bonne page en fonction du jeux. la variable page récupère le chemin d'accès à celle-ci
                for ($i=0; $i < count($type[0]) ; $i++) {
                    switch ($type[0][$i]["nom"]) {
                        case 'PICK-UP GAMES':
                            $page = "solo/pickupGames.php";
                            break;
                        case 'TRAINING PRO':
                            $page = "solo/training.php";
                            break;
                        case 'HOOPS WORKOUT':
                            $page = "solo/workout.php";
                            break;
                        default:
                            echo "aucune page à ce nom";
                            break;
                    } 
                    ?>
                        <div class="d-flex flex-column justify-content-center mx-3 typeJeux">
                            <a href="<?php echo $page; ?>">
                                <div style="border: 2px solid #fff; padding: 5%; border-radius: 20px;">
                                    <h3 class="text-typeJeux textColor"><?php echo $type[0][$i]["nom"]; ?></h1>
                                    <img class="sizeIcon" src="../assets/img/arrow_rigth.png" alt="arrow-rigth">
                                </div>
                            </a>
                            <p class="mt-3" style="font-weight: bold;"><?php echo $type[0][$i]["description"]; ?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <div>
            <h1 class="textColor text-center mb-5">PICK-UP GAMES</h1>
            <h3 class="textColor mb-5">LES PICK-UP GAMES, C'EST QUOI ?</h3>
            <p class="textColor mb-3">Tu veux jouer mais tu n'as pas de coéquipiers pour t'accompagner ? On a la solution !</p>
            <p class="textColor mb-3">Avec les pick-up games, plus de prises de tête. Tu réserves, tu viens, tu joues.</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">De nombreux créneaux en semaine et le week-end avec un terrain full court dédié.</li>
                <li style="list-style: square;" class="textColor">Des créneaux de 2h pour jouer un maximum.</li>
                <li style="list-style: square;" class="textColor">La possibilité de taffer la communauté Hoops Factory et de te la raconter auprès de tes potes (on rigole, on sait que tu es humble).</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
                <li style="list-style: square;" class="textColor">Des matchs filmés (en fonction des centres).</li>
                <li style="list-style: square;" class="textColor">Un espace lounge pour se détendre après l'effort en profitant de l'espace bar et snacking.</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
                <?php
                    //permet d'accéder  un page qui permet de réserve si la connnexion à été effectué ou non
                    if(isset($_SESSION['nom'])){
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="reservation-pickup.php">JE RÉSERVE !</a>
                        <?php
                    }else{
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="connexion.php?page=reservation-pickup">JE RÉSERVE !</a>
                        <?php
                    }
                ?>
            </div>
            <div class="text-center">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
            
        </div>
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
                <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="contact-training" href="contact.php">CONTACTEZ-NOUS</a>
            </div>
            <div class="text-center mb-5">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
        </div>
        <div>
            <h1 class="textColor text-center mb-5">HOOPS WORKOUT</h1>
            <h3 class="textColor mb-5">Tu souhaites perfectionner tes fondamentaux basket avec l'aide de nos coachs ?</h3>
            <p class="textColor mb-3">Les workouts Hoops Factory sont faits pour toi !</p>
            <p class="textColor mb-3">Au programme : </p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor"> Des thèmes spécifiques en fonction de ton niveau.</li>
                <li style="list-style: square;" class="textColor"> Un coach pour encadrer ta séance.</li>
                <li style="list-style: square;" class="textColor">Du travail en groupe réduit pour de meilleurs résultats.</li>
                <li style="list-style: square;" class="textColor">Des séances d'1h minimum.</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
            </ul>
            <div class="d-flex justify-content-center mb-3 ">
                <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="contact-workout" href="contact.php">CONTACTEZ-NOUS</a>
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
