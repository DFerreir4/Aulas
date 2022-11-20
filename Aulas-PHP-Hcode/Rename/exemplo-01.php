<?php
$dir1 = "folder_01";
$dir2= "folder_02";
//!is_dir = se não for um diretorio
if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);
//se ele não existe, crie!
//-------------------------------------

$fileName = "README.txt";

//!file_exists = se não existir um arquivo
if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName)){

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $fileName, "w+");
    //fwrite = escreva no arquivo
    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
} 

//como mover o arquivo
//1 parametro: o nome do arquivo
//2 parametro: o caminho que ele vai ficar
//renomear o caminho
rename($dir1 . DIRECTORY_SEPARATOR . $fileName, //origem
$dir2 . DIRECTORY_SEPARATOR . $fileName); //destomp

echo "Arquivo movido com sucesso!";


?>