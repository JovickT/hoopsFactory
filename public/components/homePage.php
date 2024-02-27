<?php
    //affichage de la barre de navigation
    require_once 'navbar.php';
?>

<div class="container menu" id="list">
    <!--Liste déroulente du menu burger qui permet de mener vers les différentes page du site en fonction de si nous sommes connecté ou non -->
    <ul>
        <?php
            if(isset($_SESSION['nom'])){
                ?><li><button class="mon-btn mb-3" id="deconnexion" type="button">DÉCONNEXION</button></li><?php
            }else{
                ?><a href="public/components/connexion.php?page=index"><li><button class="mon-btn mb-3" type="button">MON COMPTE</button></li></a><?php
            }
        ?>
        
        <li class="textColor mb-3 li-chevron" ><span class="chevron" id="chevron"><span id="li-chevron">NOS OFFRES</span></span>
            <ul class="mb-3 offres" id="offres">
                <?php 
                    if(!isset($_SESSION['nom'])){
                        ?><a href="public/components/connexion.php?page=solo" class="textColor link-offer"><li class="mb-2">SOLO</li></a><?php
                    }else{
                        ?><a href="public/components/solo.php" class="textColor link-offer"><li class="mb-2">SOLO</li></a><?php
                    }
                ?>

                <?php 
                    if(!isset($_SESSION['nom'])){
                        ?><a href="public/components/connexion.php?page=plusieurs" class="textColor link-offer"><li class="mb-2">A PLUSIEURS</li></a><?php
                    }else{
                        ?><a href="public/components/plusieurs.php" class="textColor link-offer"><li class="mb-2">A PLUSIEURS</li></a><?php
                    }
                ?>

                <?php 
                    if(!isset($_SESSION['nom'])){
                        ?><a href="public/components/connexion.php?page=kids" class="textColor link-offer"><li class="mb-2">KIDS</li></a><?php
                    }else{
                        ?><a href="public/components/kids.php" class="textColor link-offer"><li class="mb-2">KIDS</li></a><?php
                    }
                ?>

                <?php 
                    if(!isset($_SESSION['nom'])){
                        ?><a href="public/components/connexion.php?page=entreprises" class="textColor link-offer"><li class="mb-2">ENTREPRISES</li></a><?php
                    }else{
                        ?><a href="public/components/entreprises.php" class="textColor link-offer"><li class="mb-2">ENTREPRISES</li></a><?php
                    }
                ?>
            </ul>
        </li>
        <a href="https://www.hoopsfactory.com/center" class="textColor link-offer" target="_blank"><li class="textColor link-offer mb-3">NOS TARIFS</li></a>
        <?php 
            if(!isset($_SESSION['nom'])){
                ?><a href="public/components/connexion.php?page=terrain" class="textColor link-offer"><li class="mb-2"><button class="mon-btn mb-2" type="button">JE RÉSERVE UN TERRAIN</button></li></a><?php
            }else{
                ?> <a href="public/components/reservation-pickup.php?res=terrain"><li><button class="mon-btn mb-2" type="button">JE RÉSERVE UN TERRAIN</button></li></a><?php
            }
        ?>
         <?php 
            if(!isset($_SESSION['nom'])){
                ?><a href="public/components/connexion.php?page=pickup" class="textColor link-offer"><li class="mb-2"><button class="mon-btn mb-2" type="button">JE RÉSERVE UN PICK-UP</button></li></a><?php
            }else{
                ?> <a href="public/components/reservation-pickup.php?res=pickup"><li><button class="mon-btn mb-2" type="button">JE RÉSERVE UN PICK-UP</button></li></a><?php
            }
        ?>
    </ul>
</div>

<div class="container">
    <div>
        <h1 class="textColor mb-5">DES OFFRES POUR TOUT LE MONDE !</h1>
        <div class="d-flex">
            <?php 
               //code php qui permet d'afficher les images et le titres des différentes catégorie de jeux disponnible présent depuis la base de données 
                $jeux = $display -> displayImages();
              
                for ($i=0; $i < count($jeux); $i++) { 
                    ?>
                        <li class="mb-2">
                            <div class="d-flex flex-column mx-2" >
                                <a href="public/components/<?php switch ($jeux[$i]["nom"]) {case 'a plusieurs':echo 'plusieurs';break;default:echo $jeux[$i]["nom"];break;}?>.php" class="textColor link-offer" id="solo">
                                    <img class="imgUse" src="<?php echo $jeux[$i]["image"]; ?>" alt="img1" style="width: 95%">
                                    <p class="d-flex justify-content-center textColor " style="text-transform: uppercase;"><?php echo $jeux[$i]["nom"]; ?></p>
                                </a>
                            </div>
                        </li>
                    <?php
                }
            ?>
        </div>

    </div>
    <div>
        <h1 class="textColor mb-5">NOTRE HISTOIRE</h1>
        <div class="d-flex">
            <p class="textColor mx-5" style="font-size: 20px;">Hoops Factory en quelques mots, c'est des centres indoor dévoués à la pratique du</br> basketball avec 
                des installations haut de gamme comme en NBA. Avec 5 centres</br> en France (Paris, Lille, Toulouse, 
                Bordeaux et Clermont), nous accueillons nos</br> balleuses et ballers tous les jours de la semaine.
                Nos offres sont adaptées à tous,</br> que vous souhaitiez jouer en solo ou à plusieurs, et à tout 
                le monde avec des</br> offres kids, entreprise, pour jouer entre amis...
            </p>
            <img style="width: 25%;"src="public/assets/img/notre-histoire2.png" alt="img5">
        </div>
    </div>

</div>
<!--JavaScript qui permet la déconnexion de la personne connecter -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
        let deconnexion = document.getElementById("deconnexion");

        deconnexion.addEventListener("click", function() {
            // Rediriger vers la page de déconnexion
            window.location.href = "public/components/logout.php";
        });
    });
</script>
<!-- inclusion de la page footer -->
<?php
    require 'footer.php';
?>

