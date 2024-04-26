<?php
$teste = "MARIA23B222"; 
$padrao = '/\d+/'; 
if(preg_match_all($padrao, $teste, $matche)){
    $numero = $matche[0];
    echo "numeros: " . implode ($numero);
}

$teste = "  ";
    if(empty($teste)) {
        echo "chegou aqui";
    }

?>