<?php

class Pessoa{
    private $txtNome;
    private $txtEnd;
    private $txtCid;
    private $txtSen;

    public function setNome($txtNome){
        $this->txtNome = $txtNome;
    }

    public function getNome(){
        return $this->txtNome;
    }

    public function setEnd($txtEnd){
        $this->txtEnd = $txtEnd;
    }

    public function getEnd(){
        return $this->txtEnd;
    }

    public function setCid($txtCid){
        $this->txtCid = $txtCid;
    }

    public function getCid(){
        return $this->txtCid;
    }

    public function setSen($txtSen){
        $this->txtSen = $txtSen;
    }

    public function getSen(){
        return $this->txtSen;
    }
}


?>