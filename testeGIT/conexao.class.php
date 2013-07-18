<?php
//classe para conexão com banco de dados MySQL
class ConexaoMysql {
    public $servidor; //atributos da classe ou caracyeristicas do objeto
    public $usuario;
    public $senha;
    public $bancoDeDadoa;
    
    //ações a serem realizadas pelas , ou seja, os metodos
    public function conectar() {
        mysql_connect($this->servidor, $this->usuario, $this->senha) or die(mysql_error());
    }
    
    public function selecionarBD() {
        mysql_select_db($this->bancoDeDadoa);
    } 
    
    public function fechar() {
        mysql_close();
    }
}
