<?php


class Usuarios{
    //Atributos
    private $id_usuario;
    private $des_login;
    private $des_senha;
    private $dt_cadastro;

   //Getters e Setters
    public function getId_Usuario(){
        return $this->id_usuario;
    }

    public function setId_Usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function getDes_Login(){
        return $this->des_login;
    }

    public function setDes_Login($des_login){
        $this->des_login = $des_login;
    }

    public function getDes_Senha(){
        return $this->des_senha;
    }

    public function setDes_Senha($des_senha){
        $this->des_senha = $des_senha;
    }

    public function getDt_Cadastro(){
        return $this->dt_cadastro;
    }

    public function setDt_Cadastro($dt_cadastro){
        $this->dt_cadastro = $dt_cadastro;
    }

    //Metódos criados

    public function loadById($id){
        //carrega os dados de 1 usuário
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID",array(
            ":ID" => $id
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }

    //O metodo abaixo está sendo estático por não ter $this no escopo
    //a vantagem de um metodo estátido é que não precisa estanciar o objeto
    public static function getList(){
        $sql = new Sql();
       return $sql->select("SELECT * FROM tb_usuarios ORDER BY des_login;");


    }

    public static function search($login){
        $sql = new Sql();
         return $sql->select("SELECT * FROM tb_usuarios WHERE des_login LIKE :SEARCH ORDER BY des_login",array(
            ':SEARCH' => "%".$login."%"
        ));
    }

    public function login($login,$senha){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE des_login = :LOGIN AND des_senha = :SENHA",array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }else{

            throw new Exception("Login e/ou senha inválidos.");

        }

    }

    //o mesmo código que estamos usando mais de 3x
    public function setData($data){
        $this->setId_Usuario($data['id_usuario']);
        $this->setDes_Login($data['des_login']);
        $this->setDes_Senha($data['des_senha']);
        $this->setDt_Cadastro(new DateTime($data['dt_cadastro']));
    }

    public function incluir(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN,:SENHA)",array(
            ':LOGIN' =>$this->getDes_Login(),
            ':SENHA' =>$this->getDes_Senha()
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        
            }

        }

    public function alterar($login,$senha){
        $this->setDes_Login($login);
        $this->setDes_Senha($senha);

        // o metódo joga os dados dentro da memoria e a baixo puxa esses dados
        //para alterar na query

        $sql = new Sql();
        $sql->executarQuery("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :SENHA WHERE id_usuario :ID",array(
            ':LOGIN' => $this->getDes_Login(),
            ':SENHA' => $this->getDes_Senha(),
            ':ID' => $this->getId_Usuario()
        ));

  
        //query() é só para executar
    }

    public function deletar(){
        $sql = new Sql();
        $sql->executarQuery("DELETE FROM tb_usuarios WHERE id_usuario :ID",array(
            ':ID' =>$this->getId_Usuario()
        ));

        $this->setId_Usuario(0);
        $this->setDes_Login("");
        $this->setDes_Senha("");
        $this->setDt_Cadastro(new DateTime());
    }

    
    public function __construct($login = "",$senha = "")
    {
        // as ""s nos parametros é que se chammar o construtor beleza, se não , beleza também
        // ele não se torna obrigatório
        $this->setDes_Login($login);
        $this->setDes_Senha($senha);
        
    }










    public function __toString()
    {
        return json_encode(array(

        "id_usuario" => $this->getId_Usuario(),
        "des_login" => $this->getDes_Login(),
        "des_senha" => $this->getDes_Senha(),
        "dt_cadatro" => $this->getDt_Cadastro()->format("d/m/Y H:i:s")


        ));
    }







}







?>