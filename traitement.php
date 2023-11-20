<?php
//connecter à la bdd
$servername="localhost";
$username ="root";
$password ="root";

$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');


// récupérer la data insite
if(isset($_POST['ok'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email_address = $_POST['email_address'];
}

//envoyer la data à la bdd
$requete = $bdd->prepare("INSERT INTO users VALUES (0, :username, :password, :email_address)";
$requete-> execute(
array(
    "username" =>$username,
    "password" =>$password,
    "email" =>$email_address,
))
);
    echo "Inscirption réussie !";
?>

MySQL create user:
1
CREATE USER 'jdupont'@'localhost' IDENTIFIED BY 'mot_de_passe';

delete user:
1
DROP USER 'jdupont'@'localhost';

GESTION DES ROLES :

CREATE ROLE developpeur;

donner accès aux privilèges:
GRANT CREATE TABLE TO developpeur;

attribuer roles aux utilisateurs:

GRANT developpeur TO johndoe@localhost;

SHOW ROLES FOR johndoe;

REVOKE CREATE TABLE FROM developpeur;


DROP ROLE developpeur;

https://www.youtube.com/watch?v=_uHaFt5Y9FA