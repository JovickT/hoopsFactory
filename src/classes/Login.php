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

class Login{

    private $email;
    private $password;

    private $pdo;

    function __construct($pdo){ 
        $this -> pdo = $pdo;
    }

    function get_email() {
        return $this->email;
    }

    function get_password() {
        return $this->password;
    }

    function verifConnection($email, $password){
        $sql = "SELECT * FROM utilisateurs WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($user && password_verify($password, $user['password'])){
            $info = true;
        } else {
            $info = false;
        }
    
        return $info;
    }

    function displayUser($email){
        $sql = "SELECT * FROM utilisateurs WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($user){
            $info = ['id' => $user['id_utilisateur'],'nom' => $user['nom'], 'prenom' => $user['prenom']];
        } else {
            $info = null;
        }
    
        return $info;
    }


}