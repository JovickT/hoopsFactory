<?php
    session_start();
    if(isset($_POST['date'])){
        $_SESSION['maDate'] = $_POST['date'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>choisis ton heure de début.</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        <h1 class="textColor text-center mb-4">CHOISIS TON HEURE DE DÉBUT.</h1>
        <form action="heure.php" method="post" id="heureForm">
            <div class="d-flex flex-column align-items-center">
                <?php
                    // permet l'affichage des différente heure de la journée de 10h à 23:30 toutes les 30min
                    for ($i=10; $i < 24 ; $i++) { 
                       ?>
                        <input type="hidden" name="heurePile" value="<?= $i; ?>:00" class="heures">
                        <input type="hidden" name="heureHalf" value="<?= $i; ?>:30" class="heures">

                        <input type="submit" value="<?= $i; ?>:00" class="heures">
                        <?php if($i != 23): ?>
                            <input type="submit" value="<?= $i; ?>:30" class="heures">
                        <?php endif ?>
                       <?php
                    }
                ?>
            </div>
            <input type="hidden" name="heureChoisie" id="heureChoisie">
        </form>
        <p class="textColor">

       
        </p>
    </div>
    <script>
        let heures = document.getElementsByClassName("heures");
        for (let i = 0; i < heures.length; i++){
            heures[i].addEventListener('click',function(){
                console.log('heures:',heures[i].value);
            })
        }
    </script>
    <script src="../services/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>