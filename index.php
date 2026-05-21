<?php

require_once 'tris.php';

$tab = [3,1,6,0,15,5,9];

echo "Avant de trier : ";
echo implode(',', $tab) . "<br><br>";

echo "Tri à bulles : ";

echo implode(',', triBulles($tab)) . "<br><br>";

echo "L'algorithme du tri à bulles a fait " 
    . triBullesCompte($tab) 
    . " comparaisons<br>";

echo "Pour trier un tableau de " 
    . count($tab) 
    . " éléments<br>";


$tailles = [100 , 500 , 1000 , 2000 , 5000 , 10000];

foreach ($tailles as $n) {
    $tab = range($n, 1);

    $nbComp = triBullesCompte($tab);
    $temps = triBullesChrono($tab);

    echo "n = $n : $nbComp comparaisons , $temps ms <br>";
}
