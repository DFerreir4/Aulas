<?php

if(!is_dir("images")) mkdir("images");

//a função scandir ler o diretorio e transforma em um array
foreach (scandir("images") as $item) {
   //in_array não pode conter dentro desse array
    if(!in_array($item,array(".",".."))){
        unlink("images/".$item);
    }
}

echo "OK!";

?>