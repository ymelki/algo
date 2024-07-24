<?php
session_start();

function genererNbAlea(){
    $_SESSION['nb']=rand(1,100);
}
genererNbAlea();

?>
