<?php

$images = scandir("images");

$data = array();

foreach ($images as $img) {
    //in_array faz uma busca dos arrays
    //! se não existir . ou .. ai me interessa
    if(!in_array($img,array(".",".."))){
        $fileName = "images" . DIRECTORY_SEPARATOR . $img;
        // o nome completo do arquivo é composto com a pasta e o nome dele
        //então $fileName = PASTA"images" concatenando com / ou \ concatenando $img | nome do arquivo dentro do foreach

        $info = pathinfo($fileName);
        //para pegar o tamanho do arquivo
        $info["size"] = filesize($fileName);
        //data de modificação
        $info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
        //acessar via URL
        $info["url"] = "http://localhost/udemy/DIR/".str_replace("\\","/",$fileName);
        //lembrando que uma \ é um escape , então tem que ser 2 \. 
        array_push($data,$info);
        //array_punch para adicionar as informaçoes no array da $data
    }
}

echo json_encode($data);

?>