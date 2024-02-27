<?php

$filename = basename($_SERVER['SCRIPT_NAME']);
switch ($filename) {
    case 'index.php':
        require 'src/database_connection.php';
        break;
    default:
        require '../../src/database_connection.php';
        break;
}

class SignIn{

    private $prenom;
    private $nom;
    private $telephone;
    private $email;
    private $naissance;
    private $password;

    private $pdo;

    function __construct($pdo)
    {
        $this -> pdo = $pdo;
    }

    function get_prenom() {
        return $this->prenom;
    }

    function get_nom() {
        return $this->nom;
    }

    function get_telephone() {
        return $this->telephone;
    }

    function get_email() {
        return $this->email;
    }

    function get_naissance() {
        return $this->naissance;
    }

    function get_password() {
        return $this->password;
    }

    function insertUser($prenom, $nom, $telephone, $email, $naissance, $password){

        $hashPassword = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO utilisateurs (nom, prenom, email, telephone, date_naissance, password) VALUES (?,?,?,?,?,?)";
        $statement = $this -> pdo ->prepare($sql);
        $statement->bindParam(1, $nom, PDO::PARAM_STR);
        $statement->bindParam(2, $prenom, PDO::PARAM_STR);
        $statement->bindParam(3, $email, PDO::PARAM_STR);
        $statement->bindParam(4, $telephone, PDO::PARAM_STR);
        $statement->bindParam(5, $naissance, PDO::PARAM_STR);
        $statement->bindParam(6, $hashPassword, PDO::PARAM_STR);

        $result = $statement -> execute();
        return $result;
    }

}