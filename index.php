<?php

require_once 'tris.php';

$tab = [3,1,6,0,15,5,9];

echo "Avant de trier : ";
echo implode(',', $tab) . "<br><br>";

echo "Tri à Insertion : ";

echo implode(',', triInsertion($tab)) . "<br><br>";

echo "L'algorithme du tri à Insertion a fait " 
    . triInsertionCompte($tab) 
    . " comparaisons<br>";

echo "Pour trier un tableau de " 
    . count($tab) 
    . " éléments<br>";


$tailles = [100 , 500 , 1000 , 2000 , 5000 , 10000];

//foreach ($tailles as $n) {
    //$tab = range($n, 1);

    //$nbComp = triBullesCompte($tab);
    //$temps = triBullesChrono($tab);

    //echo "n = $n : $nbComp comparaisons , $temps ms <br>";
//}

foreach ($tailles as $n) {
    $tab = range($n, 1);

    $nbComp = triInsertionCompte($tab);
    $temps = triInsertionChrono($tab);

    echo "n = $n : $nbComp comparaisons , $temps ms <br>";
}