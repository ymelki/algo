<?php
session_start();
var_dump($_SESSION);
if (isset($_POST['user_nb'])) { 
    if ($_POST['user_nb']>$_SESSION['nb']) {
        echo "c'est moins que ça !";
    }
    if ($_POST['user_nb']<$_SESSION['nb']) {
        echo "c'est plus que ça !";
    }
    if ($_POST['user_nb']==$_SESSION['nb']){
        echo "bravo men !!!! Le nombre est à deviner de nouveau !";
        $_SESSION['nb']=rand(1,100);
    }
}
?>
<form action="jeu.php" method="POST">
    <input type="text" name="user_nb" placeholder="Entrez un nombre entre 1 et 1O0">
    <input type="submit">
</form>
