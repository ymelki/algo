<?php
session_start();
var_dump($_SESSION);
echo $_SESSION["nom"];
echo $_COOKIE['PHPSESSID'];