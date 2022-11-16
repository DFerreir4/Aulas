<?php

function soma(int ...$valores){
return array_sum($valores);
}

echo soma(1,5);
echo "<br>";
echo soma(2.5, 3.2);
echo "<br>";
echo soma(22,35);


?>