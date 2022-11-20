<?php

$fileName = "usuários.csv";

if(file_exists($fileName)){
    $file = fopen($fileName,"r");
}

    $headers = explode(",",fgets($file));

    $data = array();

    while($row = fgets($file)){

     $rowData = explode(",",$row);
     $linha = array();

        for($i = 0; $i < count($headers); $i++){
            $linha[$headers[$i]] = $rowData[$i];
            //o texto ta no headers

        }

        array_push($data,$linha);
    
    
    }
        fclose($file);
        echo json_encode($data);
?>