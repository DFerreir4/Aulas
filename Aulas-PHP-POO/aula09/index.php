<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - POO </title>
</head>
<body>
    <pre>
        <h1>exercicio</h1>
    <?php
    require_once 'Pessoa_.php';
    require_once 'Livro_.php';

    $l[0] = new Pessoa_("Diego",34,"M");
    $l[1] = new Pessoa_("Aninha",32,"F");

    $l[0]->detalhes();



    print_r($l);
    
    

                
   
   ?>
    </pre>
</body>
</html>