<?php

function table0(){
    $table=6;
    for ($i=1;$i<=10;$i++){
        $resultat=$i*$table;
        // echo "2 X".$i." = ".$resultat;
        ?>
        <?=$table?> X <?=$i?> = <?=$resultat?><br>
        <?php
    }
}
function table($table){
    for ($i=1;$i<=10;$i++){
        $resultat=$i*$table;
        // echo "2 X".$i." = ".$resultat;
        ?>
        <?=$table?> X <?=$i?> = <?=$resultat?><br>
        <?php
    }
}
// table(2);
// table(8);


function allTable($deb, $nbTable, ){
    for ($table=$deb;$table<=$nbTable;$table++){
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
}

allTable(2, 3);