<?php

//include 'inc/exemplo-01.php';
//caso queria colocar o arquivo fora da pasta...
//para acessa-lo basta colocar dois pontos -  ..
// fazendo isso , o caminho vai para o pasta anterior
// chamado como caminho de rede. (sobe um diretorio)

require_once "inc/exemplo-01.php";

require_once "inc/exemplo-01.php";

//com o require mostrou o mesmo resultado... mas qual a diferença?
//o require obriga que tenha o arquivo solicitado. Caso não tenha, ele da um erro fatal e para o site
//o include tenta funcionar mesmo se o arquivo esteja com problema o que não encontre o arquivo

$resultado = somar(10,50);

echo $resultado;





?>