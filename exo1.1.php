<?php

// aficher Hello + select
// dans les parenthese je peux des parametres
function afficher(){
    echo "hello world
        <select>
        <option>1</option>
        <option>2</option>
        </select>
        ";
}

function afficher2(string $prenom){
    echo "hello ". $prenom ."
        <select>
        <option>1</option>
        <option>2</option>
        </select>
        ";
}

function afficher3(string $prenom, string $html){
    echo "hello ". $prenom ."
        $html
        ";
}

// appel de la fonction afficher
afficher();
