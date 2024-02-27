<?php
    session_start();
    require_once '../../src/classes/Display.php';
    //appelle de la class Display qui va permettre l'affichage du nom et de la description des jeux de la catégorie Kids
    $solo = new Display($pdo);
    $type = $solo -> displayTypeDeJeux("kids");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Kids</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        <hr class="horizontal-line">
        <h1 class="textColor text-center mb-5">KIDS</h1>

        <div class="d-flex mb-5" style="width: 100%">
            <?php
                //permet d'accéder à la bonne page en fonction du jeux. la variable page récupère le chemin d'accès à celle-ci
                for ($i=0; $i < count($type[0]) ; $i++) { 
                    switch ($type[0][$i]["nom"]) {
                        case 'BIRTHDAYS':
                            $page = "kids/birthdays.php";
                            break;
                        case 'CAMPS':
                            $page = "kids/camps.php";
                            break;
                        case 'ACADEMY':
                            $page = "kids/academy.php";
                            break;
                        default:
                            echo 'aucne page à ce nom';
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
                    //permet d'accéder  un page qui permet de réserve si la connnexion à été effectué ou non

                    if(isset($_SESSION['nom'])){
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="kids/birthdays.php">JE RÉSERVE !</a>
                        <?php
                    }else{
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="connexion.php?reservation-pickup">JE RÉSERVE !</a>
                        <?php
                    }
                ?>
            </div>
            <div class="text-center mb-5">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
        </div>
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
                    //permet d'accéder  un page qui permet de réserve si la connnexion à été effectué ou non

                    if(isset($_SESSION['nom'])){
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="kids/camps.php">JE RÉSERVE !</a>
                        <?php
                    }else{
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="connexion.php?reservation-pickup">JE RÉSERVE !</a>
                        <?php
                    }
                ?>
            </div>
            <div class="text-center mb-5">
                <a href="#navbar-connexion" class="textColor mb-5">Retour en haut</a>
            </div>
        </div>
        <div>
            <h1 class="textColor text-center mb-5">ACADEMY</h1>
            <h3 class="textColor mb-5">HOOPS FACTORY BASKETBALL ACADEMY, C'EST QUOI ?</h3>
            <p class="textColor mb-3">Votre enfant souhaite prendre du plaisir en jouant au basket sans avoir à prendre une licence en club ? On s'occupe de tout !</p>
            <p class="textColor mb-3">Hoops Factory Basketball Academy, l'offre parfaite pour les jeunes basketteuses et basketteurs.</p>
            <ul class="mb-5">
                <li style="list-style: square;" class="textColor">De septembre à juin, la Hoops Factory Basketball Academy accueille les enfants âgés de 4 à 14 ans.</li>
                <li style="list-style: square;" class="textColor">Tous les mercredis de 14h à 18h et tous les samedis de 10h à 14h (en fonction des ages).</li>
                <li style="list-style: square;" class="textColor">Des séances d'entraînement et un encadrement adaptés au niveau de chacun.</li>
                <li style="list-style: square;" class="textColor">Des infrastructures exceptionnelles : parquet en bois massif, panneaux en plexiglas, terrains habillés.</li>
            </ul>
            <p class="textColor mb-5">La Hoops Factory Basketball Academy s'appuie sur ses valeurs de solidarité, partage, respect et engagement.</p>
            <div class="d-flex justify-content-center mb-3 ">
            <?php
                    //permet d'accéder  un page qui permet de réserve si la connnexion à été effectué ou non

                    if(isset($_SESSION['nom'])){
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="kids/academy.php">JE RÉSERVE !</a>
                        <?php
                    }else{
                        ?>
                            <a style="width: 50%" class="d-flex justify-content-center mon-btn mb-3" id="connexion" href="connexion.php?page=academy">JE RÉSERVE !</a>
                        <?php
                    }
                ?>
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