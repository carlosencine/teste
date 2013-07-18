<?php
require('pessoa.class.php'); //incluo o arquivo da classe

$pessoa = new pessoa; //crio o objeto pessoa
$pessoa->nome = 'carlos';//atribuo o valor para o atributo nome
echo $pessoa->nome."<br>";//imprimo o atributo nome no navegador
$pessoa->idade = '25 ANOS';//atribuo o valor para o atributo idade
echo $pessoa->idade."<br>";//imprimo o atributo idade
echo $pessoa->time();
?>