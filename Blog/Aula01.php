<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

$texto = '<h1>Novo teste</h1> <p>para</p> resumir';
echo resumirTexto($texto, 50);
