<?php

//$diaDaSemana = date("w");
//função nativa do php
$diaDaSemana = 8;
//fazer o default funcionar.

switch ($diaDaSemana){
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Não temos esse dia na semana";
        //se não cair em nenhuma das opções acima do default. Vem para o Padrão!
        break;
}




?>