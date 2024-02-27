<?php
    session_start();
    require_once '../../src/classes/Display.php';

    $ville = new Display($pdo);
    $displayVille = $ville -> displayVilles($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Pick-up</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
       
        <h1 class="textColor text-center mb-5">CHOISIS TON CENTRE.</h1>
        <div class="text-center mb-5">
            <?php
            
                for ($i=0; $i < count($displayVille); $i++) { 
                    ?>
                    <input type="hidden" name="<?php echo $displayVille[$i]['nom']; ?>">
                    <?php
                        switch ($_GET["res"]) {
                            case 'pickup':
                                ?>
                                <a id="<?php echo $displayVille[$i]['nom']; ?>" href="booking.php?ville=<?= $displayVille[$i]['nom']; ?> " class="d-flex flex-column bookText"><?php echo $displayVille[$i]['nom']; ?></a>
                                <?php
                                break;
                            case 'terrain':
                                ?>
                                <a id="<?php echo $displayVille[$i]['nom']; ?>" href="reservation-terrain.php?" class="d-flex flex-column bookText"><?php echo $displayVille[$i]['nom']; ?></a>
                                <?php
                                break;
                            default:
                                ?>
                                <a id="<?php echo $displayVille[$i]['nom']; ?>" href="../../index.php?" class="d-flex flex-column bookText"><?php echo $displayVille[$i]['nom']; ?></a>
                                <?php
                                break;
                        }
                    ?>
                    <?php 
                }
            ?>
           
        </div>
        <div class="d-flex flex-column text-center align-items-center">
            <button class=" center-btn mb-3" type="button">Suivant</button>
                <a class="mb-3 cancel-reservation" href="">Annuler cette réservation</a>
                <a class="need" href="">J'ai besoin d'aide</a>
        </div>
    </div>
    <script src="../services/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
