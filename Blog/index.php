 <?php
//Arquivo index responsável pela inicialização do sistema

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
echo '<h1>Arquivo index</h1>';
echo saudacao();
echo '<hr>';
echo resumirTexto('Texto para resumir' , '50');
$string = 'texto';
$int = 10;
$float = 9.9;
$bool = true;

var_dump($string);