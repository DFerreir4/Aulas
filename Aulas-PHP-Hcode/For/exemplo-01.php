<?php

for($i=0;$i<=1000;$i+=5){
    if($i >= 200 && $i <= 800) continue; //palavra reservada(se o if tiver só uma instrução não precisa por chaves)
    if($i === 900) break; //para parar a contagem no 900
    echo $i."<br>";
}




?>