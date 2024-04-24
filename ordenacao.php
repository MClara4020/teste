<?php
function ordenada($array, $n) {
    
   

    for ($i = 0; $i < $n - 1; $i++) {
        
        if ($array[$i] > $array[$i + 1]) {
            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $temp;
            $trocou = true; 
        }
    }
    
    if (!$trocou) {
        return $array;
    }

    return ordenada($array, $n - 1);
}

$arrayDesordenado = [6,3,5,2,4,1];
$tamanho = count($arrayDesordenado);
$arrayOrdenado = ordenada($arrayDesordenado, $tamanho);
echo "Ordenado: " . implode(", ", $arrayOrdenado);

?>
