<?php
    session_start();

    require_once 'src/classes/Display.php';
    $display = new Display($pdo);
?>
<nav class="navbar mb-5">
    <div class="container">
        <a style="display: inline-block;" href="index.php"><img class="sizeIcon" src="public/assets/img/logo.png" alt="Logo"></a>
        <div class="d-flex flex-column">
            <img style="width: 47%" src="public/assets/img/location.png" alt="Localisation">
          
            <select style="background: black; border: 0; width: 120%" class="textColor" id="monSelect" name="ville" id="ville">
                <?php 
                    //permet l'affichage des différents centre existant 
                    $city = $display -> displayVilles();
                    for ($i=0; $i < count($city); $i++) { 
                        ?>
                        <a href="index.php?ville=<?php echo $city[$i]['nom']; ?>"> 
                            <option style="background: black; border: 0" value="<?php echo $city[$i]['nom']; ?>"><?php echo $city[$i]['nom']; ?></option>
                        </a>
                        <?php
                    }
                ?>
            </select>
        </div>

        <?php
            //si t'une personne est connecter un icon user suivi de son nom et prenom seront afficher dans la barre de navigation
            if(isset($_SESSION['nom'])){
               ?><div id="itemConnexion" class="d-flex">
                    <img src="public/assets/img/user.png" alt="user">
                    <p class="textColor" style="margin-top: 7%; font-weight: bold;"><?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></p>
                </div><?php
            }
        ?>
        <img class="menu-style" style="width: 2%;" src="public/assets/img/menu.png" alt="Menu" id="menu">
    </div>
</nav>


