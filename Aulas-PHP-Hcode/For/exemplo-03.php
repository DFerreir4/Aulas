<?php

echo "<select>";

for($i=date("Y");$i >= date("Y")-100;$i--){
    echo '<option value="'.$i.'">'.$i.'</option>';

}
//o que está imprimindo é um select de data.. do ano atual que é 2022 até o ano de 1922

echo "</select>";
?>