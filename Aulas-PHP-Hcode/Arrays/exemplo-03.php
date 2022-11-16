<?php

$pessoas = array();

array_push($pessoas, array(
'nome' => 'Diego',
'idade' => 34
));

array_push($pessoas, array(
    'nome' => 'Aninha',
    'idade' => 31
));

echo "<pre>";
print_r($pessoas);
echo "</pre>";

print_r($pessoas[1]['idade']);

echo "<br>";

print_r("Nome : ".$pessoas[0]['nome']."<br>"."Idade : ".$pessoas[0]['idade']);
echo "<br>";
echo "<br>";
print_r("Nome : ".$pessoas[1]['nome']."<br>"."Idade : ".$pessoas[1]['idade']);

?>