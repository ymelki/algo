<?php
session_start();
// Objection : avoir dans une variable a
// destination de plusieurs pages une liste des produits ajouter 
// au panier
// a chaque fois que l'on va cloquer sur ajouter au panier on va
// avoir un nouveau produit dans le panier

// question 1 : comment stocker une variable a
// destination de plusieurs pages
// => une variable session que l'on peut appeller panier

// question 2 : comment stocker dans une variable
// une liste des produits
// => un tableau

// question 3 : si je veux stocker des produits ,
// qu'est ce que je suis obliger du produit à minima qui 
// me permettrait de retrouver le produit de facon complete
// => id, quantité

// ----------------------------

// 1. recuperer la donnée de l'ID sur de l'URL
$id=$_GET['id'];
echo $id;

// 2. créé une variable session qui s'appelle panier
// dans de tableau appelle panier on a une notion clé / valeur
// clé du tableau va correspondre à l'id du produit
// et la valeur de la clé la quantité

// Si le panier n'existe pas

// si le produit est deja dans le panier

// si le panier existe déjà
if (isset($_SESSION['panier'])){
    $panier=$_SESSION['panier'];
    // si le produit est deja le panier je vais ajouter a la quantité
    // si la clé est présente dans le panier alors je rajoute 1 à la valeur présente
    if (array_key_exists($id,$panier)) {
        echo "la produit ".$id. "etait déjà présent dans le panier avec la quantité de ".$panier[$id] ;
        $panier[$id]=$panier[$id]+1;
        $_SESSION['panier']=$panier;
    }
    else {
        $panier[$id]=1;
        $_SESSION['panier']=$panier;
    }
}
else {
    $_SESSION['panier'][$id]=1;
}


var_dump($_SESSION['panier']);
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

require "fonction.php";

foreach ($_SESSION['panier'] as $idBook => $quantite){
    $book=getBook($idBook);
    $prixTotal=$book['price']*$quantite;
    ?>
    <hr>
    ID :  <?=$book['id']?> <br>
    NOM : <?=$book['name']?> <br>
    Catégorie : <?=$book['category_id']?> <br>
    Prix : <?=$book['price']?>
    Quantité : <?=$quantite?><hr>
    Prix Total : <?=$prixTotal?> €
    <?php
}