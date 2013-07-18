<?php
//incluir a classe de conexao

require('conexao.class.php');

//instaciar a classe ou criar o objeto

$conexao = new ConexaoMysql;
$conexao->servidor = 'localhost';//atribuição de valores para os atributos
$conexao->usuario = 'root';
$conexao->senha = '123';
$conexao->bancoDeDadoa = 'aulas';
$conexao->conectar();

?>