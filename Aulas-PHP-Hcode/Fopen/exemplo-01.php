<?php
//fopen é uma função nativa do php para criar arquivos
$file = fopen("log.txt","a+");
//fwrite para escrever dentro do arquivo
//como parâmetro ela espera uma variavel resource que é o $file acima
fwrite($file,date("Y-m-d H:i:s")."\r\n");

//fecha os comandos
fclose($file);

echo "Arquivo criado com sucesso!";

?>