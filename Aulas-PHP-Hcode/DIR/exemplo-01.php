<?php
//criando arquivo
//images nome do diretorio
$name ="images";

//como eu verifico se esse diretorio existe ?
if(!is_dir($name)){
    mkdir($name);
    //mkdir cria uma pasta
    echo "Diretório $name criado com sucesso!";
}else{
    rmdir($name);
    //remover a pasta
    echo "já existe este diretorio: $name foi removido!";
}






?>