<?php
//conversão do tipo de dado string
function soma(int ...$valores):string{
return array_sum($valores);
}

echo var_dump(soma(1,5));

echo "<br>";
echo soma(2.5, 3.2);
echo "<br>";
echo soma(22,35);


?>