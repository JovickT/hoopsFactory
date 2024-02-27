<?php
    session_start();
    require_once '../../src/classes/Insert.php';

    $reservations = new Insert($pdo);
    if(isset($_GET['ville'])){
        $_SESSION["ville"] = $_GET['ville'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Reservation du terrain</title>
</head>
<body>
   

    <div class="container" >
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        
 <!---------------------------------------------------------------------------------------------- reservation terrain ---------------------------------------------------------------------------------------------->
   <div id="terrain">
    <div class="d-flex justify-content-center">
            <div class="reserve-container text-center">
                <h1 class="textColor text-center mb-5">TU PAIES L'INTÉGRALITÉ ?</h1>
                <p class="textColor fw-bold">Top ! Tu bénéficies d'une réduction de 10€ Tu n'as plus qu'à nous demander un</br> ballon en arrivant.</p>
                <form action="date.php" method="post">
                    <div class="d-flex flex-column align-items-center">
                        <button style="width: 70%" class="mon-btn" name="nb_6" type="submit" value="6" id="nb_6">3X3</button>
                        <button style="width: 70%" class="mon-btn" name="nb_10" type="submit" value="10" id="nb_10">5X5</button>
                    </div>
                </form>
            </div>
        </div>
   </div>
  
    
   <script src="../services/navbar.js"></script>
    <script>
        let nb_6 = document.getElementById('nb_6');
        let nb_10 = document.getElementById('nb_10');

        nb_6.addEventListener('click', function() {
            event.preventDefault();
            console.log("Click on 3X3 button");
            updateNbJoueur(6);
        });

        nb_10.addEventListener('click', function() {
            event.preventDefault();
            console.log("Click on 5x5 button");
            updateNbJoueur(10);
        });

        function updateNbJoueur(nbJoueur) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'date.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log('Updated nbJoueur successfully');
                } else {
                    console.log('Failed to update nbJoueur');
                }
            };
            console.log('Sending data: nbJoueur=' + nbJoueur);
            xhr.send('nbJoueur=' + nbJoueur);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 