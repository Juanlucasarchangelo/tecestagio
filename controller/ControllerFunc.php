<?php
require_once('../model/class.empresa.php');
class ControllerFunc
{
    private $obj;
    function __construct()
    {
        $this->obj = new Empresa();
        $this->obj->conexao();
    }

    public function getTodosFunc()
    {
        $this->obj->conexao();
        $this->obj->getFuncionarios();
    }

    public function setFuncionario($nome, $cidade, $remuneracao, $area, $logo, $vaga, $descricao)
    {
        $this->obj->insertFunc($nome, $cidade, $remuneracao, $area, $logo, $vaga, $descricao);
    }
    public function updateEmpresa($id_emp, $nome, $cidade, $descricao, $vaga, $remuneracao)
    {
        $this->obj->updateEmpresa($id_emp, $nome, $cidade, $descricao, $vaga, $remuneracao);
    }
    public function deleteFuncionario($id_emp)
    {
        $this->obj->delete_emp($id_emp);
    }
}
$objControl = new ControllerFunc();
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['_incluir']) && $_POST['_incluir'] == "_incluir") {
        $objControl->setFuncionario($_POST['nome'], $_POST['cidade'], $_POST['remuneracao'], $_POST['area'], $_POST['logo'], $_POST['vaga'], $_POST['descricao']);
    } else if (isset($_POST['_update']) && $_POST['_update'] == "_update") {
        $objControl->updateEmpresa($_POST['id_emp'], $_POST['nome'], $_POST['cidade'], $_POST['remuneracao'], $_POST['area'], $_POST['logo'], $_POST['vaga'], $_POST['descricao']);
    }
}
if (isset($_GET['id_emp'])) {
    $objControl->deleteFuncionario($_GET['id_emp']);
}
