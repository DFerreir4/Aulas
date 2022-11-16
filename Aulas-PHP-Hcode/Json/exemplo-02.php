<?php

$json = '[{"nome":"Diego","idade":34},{"nome":"Aninha","idade":31}]';

$data = json_decode($json,true);
//Json_decode transforma o Json em array
echo "<pre>";
var_dump($data);
echo "</pre>";

//se trocar o true para false, o array será transformada em objeto




?>