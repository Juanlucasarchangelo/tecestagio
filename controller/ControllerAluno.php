<?php
require_once('../model/class.aluno.php');
Class ControllerAluno{
    private $obj;
    function __construct(){
        $this->obj = new Aluno();
        $this->obj->conexao();
    }
    
    public function getTodosFunc(){
        $this->obj->conexao();
        $this->obj->getAluno();
    }

    public function setAluno($nome,$sobrenome,$email,$telefone,$cidade,$curso, $curriculo, $senha, $rm, $data_nasc){
        $this->obj->insertAluno($nome,$sobrenome,$email,$telefone,$cidade,$curso, $curriculo, $senha, $rm, $data_nasc);
    }
    public function updateAluno($id_aluno,$nome,$sobrenome,$email,$telefone,$cidade,$curso, $curriculo, $senha, $rm, $data_nasc){
        $this->obj->updateAluno($id_aluno,$nome,$sobrenome,$email,$telefone,$cidade,$curso, $curriculo, $senha, $rm, $data_nasc);
    }
   
}
$objControl = new ControllerAluno();
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['_incluir']) && $_POST['_incluir'] == "_incluir"){
            $objControl->setAluno($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['telefone'],$_POST['cidade'], $_POST['curso'], $_POST['curriculo'], $_POST['senha'], $_POST['rm'], $_POST['data_nasc']);
    }
    else if(isset($_POST['_update']) && $_POST['_update'] == "_update"){
        $objControl->updateAluno($_POST['id_aluno'],$_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['telefone'],$_POST['cidade'], $_POST['curso'], $_POST['curriculo'], $_POST['senha'], $_POST['rm'], $_POST['data_nasc']);    
    }
}
?>