<?php
session_start();

$_SESSION['nb']=rand(1,100);
var_dump($_SESSION);
?>
