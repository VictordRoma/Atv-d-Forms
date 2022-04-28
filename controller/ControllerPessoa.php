<?php
require_once("../model/Pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome($_POST['txtNome']);
echo $pessoa->getNome();


$pessoa = new Pessoa();
$pessoa->setEnd($_POST['txtEnd']);
echo $pessoa->getEnd();


$pessoa = new Pessoa();
$pessoa->setCid($_POST['txtCid']);
echo $pessoa->getCid();


$pessoa = new Pessoa();
$pessoa->setSen($_POST['txtSen']);
echo $pessoa->getSen();

?>