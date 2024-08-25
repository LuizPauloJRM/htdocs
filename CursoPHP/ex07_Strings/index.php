<?php
    $nome = "Luiz";
    $sobrenome="<br>Medeiros";
    $idade = 25;
    $endereco = "<br>Rua da Cidade, 123";
    $telefone = "<br>(11) 9999-9999";
    $nom="Paulo";
    $snom="Júnior";
    $apelido = "Cunha";
    const ESTADO ="DF";
    echo "$nome $idade $endereco $telefone<br>";
    echo "Moro no ".ESTADO;
    echo "<br>$nom\"$apelido\"$snom";//escape \n \t \$
    
?>