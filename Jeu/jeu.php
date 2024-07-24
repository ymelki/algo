<?php
session_start();
function genererNbAlea(){

    $_SESSION['nb']=rand(1,100);
}
var_dump($_SESSION);


// entrée / sortie => 
function check(){
    if ($_POST['user_nb']>$_SESSION['nb']) {
        echo "c'est moins que ça !";
    } 
    if ($_POST['user_nb']<$_SESSION['nb']) {
        echo "c'est plus que ça !";
    }
    if ($_POST['user_nb']==$_SESSION['nb']){
        echo "bravo men !!!! Le nombre est à deviner de nouveau !";
        genererNbAlea();
    }
}

if (isset($_POST['user_nb'])) { 
    $compteur=$compteur++;
    if ($compteur>9){
        genererNbAlea();
    }
    check();
}
if (!(isset($compteur))){
    $compteur=0;
    genererNbAlea();
}
?>
<form action="jeu.php" method="POST">
    <input type="text" name="user_nb" placeholder="Entrez un nombre entre 1 et 1O0">
    <input type="submit">
</form>
