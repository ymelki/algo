<?php

var_dump($_POST);

// recuperer les données dans des variables

$email=$_POST['email'];
$password=$_POST['password'];


// verifie si les données soumies sont conformes 

// objectif : comparer l'email saisie par le user avec 
// les email en B.D.

// 1 connexion à la BD.
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');


// 2 Recuperation des données de users pour le user saisie (READ) 


// 2. requete select * from books
// $query = "SELECT * FROM book where id = $id";
// $statement = $pdo->query($query);
$query = "SELECT * FROM user where login = :emailprotege";

// pdo qui fait une requete
$statement = $pdo->prepare($query);
$statement->bindValue(':emailprotege', $email, PDO::PARAM_STR);
$statement->execute();

// 3. statement qui formate les données sous forme de tableau
$user = $statement->fetch(PDO::FETCH_ASSOC); 

var_dump($user);
echo isset($user);
// Si user n'existe pas => User innexistant
if ($user === false) {
    // redirige vers la page de connexion
    header("location:connexion.php");
}
else {
    // dans le cas ou le mail est ok et on verifie le mot de passe
    // mail saisie avec le mail de la B.D. qui est dans la variable $user['password']
     if ( $password == $user['password'] ) {
        echo "ok tu es bien connecté ! ";
        // créé la session et la tester sur d'autres pages
     }
     else  {
        // mot de passe faux
        header("location:connexion.php");
     }
}
// si user existe alors on compare le mot de passe saisie avec le mot de passe du user
// Si c'est user et pwd ok alors on enregistre dans la mot de passe












