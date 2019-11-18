<?php
require_once('init.php');

Class Dao{
    
   private $mysql;

   public function conexao(){
       //cria um objeto da classe Mysqli e efetua conexao com BD;
       $this->mysql = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        if($this->mysql->connect_error){
            //se verdadeiro retorna o erro gerado no mysql
            die("Falha de conexão: ". $this->mysql->connect_error);
        }

   }

    public function insertToken($token,$email){
        $stmt = $this->mysql->prepare("UPDATE funcionario SET token = ?  WHERE email = ?");
        $stmt->bind_param("ss",$token,$email);
        if( $stmt->execute() == TRUE){
            header('Location: ../view/login.php');
        }else{
            header('Location: ../view/index.php');
        }

    }

    public function insertNewPassword($token,$senha){
        $senha = sha1($senha);
        $stmt = $this->mysql->prepare("UPDATE funcionario SET senha = ?  WHERE token = ?");
        $stmt->bind_param("ss",$senha,$token);
        if( $stmt->execute() == TRUE){
            header('Location: ../view/login.php');
        }else{
            header('Location: ../view/index.php');
        }

    }
   
}

?>