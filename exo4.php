<?php

/***
 * 2*1=2
 * 2*2=4
*/
$table=6;
for ($i=1;$i<=10;$i++){
    $resultat=$i*$table;
    // echo "2 X".$i." = ".$resultat;
    ?>
    <?=$table?> X <?=$i?> = <?=$resultat?><br>
    <?php
}
?>
<hr>
<?php
$table=8;
for ($i=1;$i<=10;$i++){
    $resultat=$i*$table;
    // echo "8 X".$i." = ".$resultat;
    ?>
    <?=$table?> X <?=$i?> = <?=$resultat?><br>
    <?php
}
?>
<hr>

<?php
/**
 * Table de 1
 * 
 * Table de 2
 * 2*1=2
 * 2*2=4
 * 
 * 
 * Table de 10
 * 
 * On a une boucle chargé d'avoir les tables
 * Et on a une autre boucle pour chacune des tables
 */

 for ($table=1;$table<=12;$table++){
    ?>
    Table de <?=$table?><br>
    <?php
        for ($i=1;$i<=10;$i++){
            $resultat=$table*$i;
            // echo "8 X".$i." = ".$resultat;
            ?>
            <?=$table?> X <?=$i?> = <?=$resultat?><br>
            <?php
        }

 }