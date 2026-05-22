<?php

function triBulles($tab){

    $n = count($tab);

    for($i = 0; $i < $n -1; $i++){

        for($j = 0; $j < $n - $i - 1; $j++){

            if ($tab[$j] > $tab[$j + 1]) {
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    return $tab;
}

function triBullesCompte($tab){

    $n = count($tab);
    $compteur = 0;
    for($i = 0; $i < $n -1; $i++){

        for($j = 0; $j < $n - $i -1; $j++){
            $compteur ++; 
            if ($tab[$j] > $tab[$j + 1]) {
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    return $compteur;

}

function triBullesChrono($tab){
    $debut = microtime(true);
    triBulles($tab);
    $fin = microtime(true);
    return round(($fin - $debut) * 1000, 2);
}

function triSelection($tab){
    $n = count($tab);
    for ($i = 0; $i < $n -1; $i++){
        $indiceMin = $i;
        for ($j = $i +1; $j < $n; $j++){
            if ($tab[$j] < $tab[$indiceMin]){
                $indiceMin = $j;
            }
        }
        if ($indiceMin !== $i){
            $temp = $tab[$i];
            $tab[$i] = $tab[$indiceMin];
            $tab[$indiceMin] = $temp;
        }
    }
    return $tab;
}

function triSelectionCompte($tab){
    $n = count($tab);
    $compteur = 0;
    for ($i = 0; $i < $n -1; $i++){
        $indiceMin = $i;
        for ($j = $i +1; $j < $n; $j++){
            if ($tab[$j] < $tab[$indiceMin]){
                $indiceMin = $j;
            }
            $compteur ++;
        }
        if ($indiceMin !== $i){
            $temp = $tab[$i];
            $tab[$i] = $tab[$indiceMin];
            $tab[$indiceMin] = $temp;
        }
    }
    return $tab;
}

function triInsertion($tab){
    $n = count($tab);

    for ($i = 1; $i < $n; $i++){
        $cle = $tab[$i];
        $j = $i - 1;

        while($j >=0 && $cle < $tab[$j]){
            $tab[$j +1] = $tab[$j];
            $j--;
        }
        $tab[$j +1] = $cle;
    }
    return $tab;
}

function triInsertionCompte($tab){
    $n = count($tab);
    $compteur = 0;
    for ($i = 1; $i < $n; $i++){
        $cle = $tab[$i];
        $j = $i - 1;
    
        while($cle < $tab[$j] && $j >=0){
            $compteur ++;
            $tab[$j +1] = $tab[$j];
            $j--;
        }
        $tab[$j +1] = $cle;
    }
    return $compteur;
}

function triInsertionChrono($tab){
    $debut = microtime(true);
    triInsertion($tab);
    $fin = microtime(true);
    return round(($fin - $debut) * 1000, 2);
}
