<?php
    session_start();
    //inclusion de la class Login qui permet d'appeler les fonctions qui concerne la connexion
    require_once '../../src/classes/Login.php';
    //inclusion de la class Login qui permet d'appeler les fonctions qui concerne la l'inscription
    require_once '../../src/classes/SignIn.php';
    //une fois le formulaire valider, la class Signin est appelé afin d'ajouter les éléments du formulaire dans la base de données
    if(isset($_POST['name'])){
        $inscit = new SignIn($pdo);
        $inscit -> insertUser($_POST['firstname'], $_POST['name'], $_POST['tel'],$_POST['couriel'],$_POST['date'],$_POST['password']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="navbar-connexion mb-5">
            <img class="arrow mx-3 mt-3" src="../assets/img/arrow.png" id="arrow" alt="arrow left">
            <a href="../../index.php"><img class="sizeIcon" src="../assets/img/logo.png" alt="Logo"></a>
        </div>
        <div class="d-flex justify-content-center container">
            <div class="d-flex flex-column drap">
                <h1 style="font-weight: bold; text-align: center" class="textColor">Identifie-toi.</h1>
                <form method="post">
                    <div class="d-flex flex-column">
                        <input class="mb-3" type="email" name="email" id="email" placeholder="Email" required>
                        <input class="mb-5" type="password" name="password" id="password" placeholder="Mot de passe" required>
                        <button class="d-flex justify-content-center mon-btn mb-3" id="connexion" type="submit">JE ME CONNECTE</button>
                        <a style="text-align: center" class="textColor link-offer" href="../components/inscription.php">Tu n'as pas encore de compte ? Crée-le !</a>
                    </div>

                    <?php
                        //une fois le email et le mot de passe rentrer, cette partie permet si le formulaire de connexion à été valider de
                        //vérifier si les information de connexion son corrrecte. Si c'est le cas grâce à l'email et la fonction displayUser
                        //on récupère les informations du user qu'on affichera dans l'accueil.
                        //le switch permet la redirection vers la page qui à été sélectionner précédement grâce au $_GET['page']
                        if(isset($_POST['email']) ){
                            $log = new Login($pdo);
                            $result = $log -> verifConnection($_POST['email'], $_POST['password']);
                          
                            if($result){
                                $connect = $log -> displayUser(($_POST['email']));
                                $nom = $connect['nom'];
                                $prenom = $connect['prenom'];
                                $_SESSION['email'] = $_POST['email'];
                                $_SESSION['nom'] = $nom;
                                $_SESSION['prenom'] = $prenom;
                                switch ($_GET['page']) {
                                    case $_GET['page'] != 'index':
                                        header("Location:".$_GET['page'].".php");
                                        break;
                                    default:
                                        header("Location: ../../index.php");
                                        break;
                                }
                            }else{
                                //header('Location: connexion.php');
                            }
                        }
                    ?>
                </form>
            </div>

        </div>
    </div>
                         
    <script src="../services/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

