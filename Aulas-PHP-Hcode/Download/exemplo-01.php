<?php

$link = "https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg";


$content = file_get_contents($link);
// vem com o conteúdo bruto, então precisa interpretar

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename,"w+");

fwrite($file, $content);

fclose($file);
// O = na tag img abaixo dentro do PHP, siginifica echo

?>


<img src ="<?=$basename?>">