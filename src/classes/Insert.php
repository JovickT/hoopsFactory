<?php

//incusion du fichier Login.php
require 'Login.php';

class Insert{

    private $pdo;

    function __construct($pdo){ 
        $this -> pdo = $pdo;
    }
    //fonction qui permet la réservation du pickup games
    function pickup($maDate,$heure_debut,$heure_fin, $centre, $jeux, $email){
        $user = new Login($this->pdo);
        $receive = $user -> displayUser($email);
        $id = $receive['id'];
        $date = $maDate;
        $heureDebut = $heure_debut;
        $nbJoueur = 1;
        $heureFin = $heure_fin;
        $datetimeDebut = $date . ' ' . $heureDebut;
        // Concaténation de la date et de l'heure de fin pour créer la DATETIME de fin
        $datetimeFin = $date . ' ' . $heureFin;
        $sql = "INSERT INTO reservation (date_debut, date_fin, nbJoueur, centre, game, id_utilisateur) VALUES (?,?,?,?,?,?)";
        $statement = $this -> pdo ->prepare($sql);
        $statement->bindParam(1, $datetimeDebut, PDO::PARAM_STR);
        $statement->bindParam(2, $datetimeFin, PDO::PARAM_STR);   
        $statement->bindParam(3, $nbJoueur, PDO::PARAM_STR);
        $statement->bindParam(4, $centre, PDO::PARAM_STR);
        $statement->bindParam(5, $jeux, PDO::PARAM_STR);
        $statement->bindParam(6, $id, PDO::PARAM_STR);

        $result = $statement -> execute();
        return $result;
    }

}