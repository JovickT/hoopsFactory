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
    <title>Booking</title>
</head>
<body>
    <!---------------------------------------------------------------------------------------------- reservation Pick-Up Games ---------------------------------------------------------------------------------------------->

    <div class="container" >
        <div class="navbar-connexion mb-5" id="navbar-connexion">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        
        <div id="pickup">
            <h1 class="textColor text-center mb-5">CHOISIS PARMI LES PICK-UP DISPONIBLES</h1>
            <form action="booking.php" method="post">
                <div class="d-flex flex-column text-center mb-2">
                    <span class="textColor">24/02</span>
                    <input type="hidden" name="date" value="2024-02-24">
                    <input type="hidden" name="debut_heure" value="10:00">
                    <input type="hidden" name="debut_fin" value="12:00">
                    <div class="d-flex justify-content-center">
                        <div class="">
                            
                            <!-- Utilisez JavaScript pour mettre à jour la valeur du champ caché lors du clic sur les boutons -->
                            <input type="button" class="input-booking-heure" onclick="document.getElementsByName('debut_heure')[0].value = '10:00'" value="10:00">
                            <span class="spanTire">-</span>
                            <input type="button" class="input-booking-heure" onclick="document.getElementsByName('debut_fin')[0].value = '12:00'" value="12:00">
                        </div>
                        <input type='hidden' value="PICK-UP GAMES" name="jeux">
                        <span class="book-pickup mt-2">PICK-UP GAMES</span>
                    </div>
                    <p class="textColor">A partir de 10.00€</p>
                    <p class="textColor">(0 place(s) réservée(s)/30 place(s) disponible(s))</p>
                </div>
                <div class="validation" id="1">
                    <p class="">Êtes vous sur de vouloir réserver ?</p>
                    <div style="width: 75%" class="d-flex">
                        <button class="validation-btn mx-3" id="yes" type="submit">Oui</button>
                        <button class="validation-btn no" type="button">Non</button>
                    </div>
                </div>
            </form>
            <form action="booking.php" method="post">
                <div class="d-flex flex-column text-center mb-2">
                    <span class="textColor">24/02</span>
                    <input type="hidden" name="date" value="2024-02-24">
                    <input type="hidden" name="debut_heure" value="13:00">
                    <input type="hidden" name="debut_fin" value="15:00">
                    <div class="d-flex justify-content-center">
                        <div class="">
                            
                            <!-- Utilisez JavaScript pour mettre à jour la valeur du champ caché lors du clic sur les boutons -->
                            <input type="button" class="input-booking-heure" onclick="document.getElementsByName('debut_heure')[0].value = '13:00'" value="13:00">
                            <span class="spanTire">-</span>
                            <input type="button" class="input-booking-heure" onclick="document.getElementsByName('debut_fin')[0].value = '15:00'" value="15:00">
                        </div>
                        <input type='hidden' value="PICK-UP GAMES" name="jeux">
                        <span class="book-pickup mt-2">PICK-UP GAMES</span>
                    </div>
                    <p class="textColor">A partir de 10.00€</p>
                    <p class="textColor">(0 place(s) réservée(s)/30 place(s) disponible(s))</p>
                </div>
                <div class="validation" id="2">
                    <p class="">Êtes vous sur de vouloir réserver ?</p>
                    <div style="width: 75%" class="d-flex">
                        <button class="validation-btn mx-3" id="yes" type="submit">Oui</button>
                        <button class="validation-btn no" type="button">Non</button>
                    </div>
                </div>
            </form>
            <form action="booking.php?ville=<?= $_SESSION["ville"]; ?>" method="post">
                <div class="d-flex flex-column text-center mb-2">
                    <span class="textColor">24/02</span>
                    <input type="hidden" name="date" value="2024-02-24">
                    <input type="hidden" name="debut_heure" value="16:00">
                    <input type="hidden" name="debut_fin" value="18:00">
            
                    <div class="d-flex justify-content-center">
                        <div class="">
                            
                            <!-- Utilisez JavaScript pour mettre à jour la valeur du champ caché lors du clic sur les boutons -->
                            <input type="button" class="input-booking-heure" onclick="document.getElementsByName('debut_heure')[0].value = '16:00'" value="16:00">
                            <span class="spanTire">-</span>
                            <input type="button" class="input-booking-heure" onclick="document.getElementsByName('debut_fin')[0].value = '18:00'" value="18:00">
                        </div>
                        <input type='hidden' value="PICK-UP GAMES" name="jeux">
                        <span class="book-pickup mt-2">PICK-UP GAMES</span>
                    </div>
                    <p class="textColor">A partir de 10.00€</p>
                    <p class="textColor">(0 place(s) réservée(s)/30 place(s) disponible(s))</p>
                </div>

                <div class="validation">
                    <p class="">Êtes vous sur de vouloir réserver ?</p>
                    <div style="width: 75%" class="d-flex">
                        <button class="validation-btn mx-3" id="yes" type="submit">Oui</button>
                        <button class="validation-btn no" type="button">Non</button>
                    </div>
                </div>
            </form>
            <p class="textColor">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if($_POST){
                        $reservations ->pickup($_POST['date'],$_POST['debut_heure'],$_POST['debut_fin'],$_SESSION['ville'],$_POST['jeux'],$_SESSION['email']);
                    }else{
                        echo 'pas de données';
                    }
                }

                ?>
            </p>
        </div>
    </div>
       
    
    <script src="../services/navbar.js"></script>
    <script src="../services/booking.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
