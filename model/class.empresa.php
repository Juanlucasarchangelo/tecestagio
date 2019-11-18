<?php
require_once('class.dao.php');
Class Empresa extends Dao{
    
    private $nome;
    private $cidade;
    private $descricao;
    private $vaga;
    private $area;
    private $remuneracao;
    private $logo;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setVaga($vaga){
        $this->vaga = $vaga;
    }
    public function getVaga(){
        return $this->vaga;
    }
    public function setRemuneracao($remuneracao){
        $this->remuneracao = $remuneracao;
    }
    public function getRemuneracao(){
        return $this->remuneracao;
    }
    public function setArea($Area){
        $this->area = $Area;
    }
    public function getArea(){
        return $this->Area;
    }
    public function setLogo($logo){
        $this->logo = $logo;
    }
    public function getLogo(){
        return $this->logo;
    }
}
?>