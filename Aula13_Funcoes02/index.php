<?php
function somar($c, $d) {
    return $c + $d;
}

$resultado = somar(6, 7); // A chamada da função deve estar fora da função 'somar'
echo $resultado; 
?>
