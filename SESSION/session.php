<?php

// Besoin : creer une variable qui existe dans toute les pages
// une super globale.
session_start();

// 1 fois
$_SESSION['nom']="Yoel";

// 2 fois
$_SESSION['nom']="Toto";

// 2 fois
$_SESSION['nom']="Toto";
/**
 * $_SESSION['nom']=> PHPSESSID XXXX
 * $_SESSION['nom']=> PHPSESSID YYYY
 */

var_dump($_SESSION);