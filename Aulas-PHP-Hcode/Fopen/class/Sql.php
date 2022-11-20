<?php


class Sql extends PDO{
// o extends PDO é uma classe nativa do PHP
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO(
            "mysql:host=localhost;dbname=dbphp7",
            "root",
            ""
        );
        
    }

    private function setParams($statment,$parameters = array()){
        foreach($parameters as $key => $value){
            $this->setParam($statment,$key, $value);
        }

    }

    
    private function setParam($statement,$key,$valor){
        $statement->bindParam($key,$valor);
    }



    public function executarQuery($rawQuery,$params = array())
    {
        //$rawQuery significa query bruta ou seja uma query que vai tratar depois
        //$params com array que vai entrar os dados
        $stmt = $this->conn->prepare($rawQuery);
        //associar os parametros a esse comando
        $this->setParams($stmt,$params);

        $stmt->execute();

        return $stmt;
    }


    public function select($rawQuery,$params = array()):array
    {
        $stmt = $this->executarQuery($rawQuery,$params);

       return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    

        

    }





}



?>