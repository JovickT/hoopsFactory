<?php

//permet l'incluson du pdo dans n'importe quel fichier du projet
$filename = basename($_SERVER['SCRIPT_NAME']);
switch ($filename) {
    case 'index.php':
        require 'src/database_connection.php';
        break;
    default:
        require '../../src/database_connection.php';
        break;
}

class Display{

    private $pdo;

    function __construct($pdo){ 
        $this -> pdo = $pdo;
    }

    //fonction qui permet l'affichage des images dans l'index des différente catégories de jeux 
    function displayImages(){
        $sql = "SELECT * FROM Jeux";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_DEFAULT);
    
        return $user;
    }

    //fonction qui permet l'affichage des différentes villes ou se situe les centres Hoops factory
    function displayVilles(){
        $sql = "SELECT * FROM Villes";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $city = $stmt->fetchAll(PDO::FETCH_DEFAULT);
    
        return $city;
    }

    //fonction qui permet d'afficher les informations des différents type de jeux de la catégorie chosis en paramètre 
    function displayTypeDeJeux($page){
        $sql = "SELECT * FROM jeux WHERE nom = '$page'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $jeu = $stmt->fetch(PDO::FETCH_ASSOC);
        $id_jeu = $jeu["id_jeu"];

        $sql = "SELECT * FROM `assossiation_jeux` INNER JOIN 
        type_jeux ON assossiation_jeux.id_type_jeu = type_jeux.id_type_jeu WHERE assossiation_jeux.id_jeu = $id_jeu";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $jeu = $stmt->fetchAll(PDO::FETCH_DEFAULT);

        $type_jeux[] = $jeu;

        return $type_jeux;
    }

}