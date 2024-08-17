<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
// Recebe o numero
$num = 2;
$inicial = $num;
// Recebe o expoente
$exp = 3;
// Caso o valor da exponenciação seja diferente de 0
if ($exp != 0) {
// Calculando o valor
for ($i = 1; $i < $exp; $i++) {
$num = $inicial * $num;
// Caso o valor da exponenciação seje igual a 0
}
} else {
$num = "1";
}
// Exibindo o resultado
echo $num;
?>
    </body>
</html>
