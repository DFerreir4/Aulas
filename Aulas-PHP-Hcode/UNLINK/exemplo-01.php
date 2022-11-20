<?php

$file = fopen("teste.txt","w+");

fclose($file);

unlink("teste.txt");
// a função unlink remove o arquivo criado.
echo "Arquivo removido com sucesso!";


?>