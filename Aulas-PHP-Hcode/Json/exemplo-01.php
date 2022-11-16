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
echo json_encode($pessoas);
echo "</pre>";

// a função Json_encode transformar o array em Json
?>