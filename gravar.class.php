<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        
        public function __construct() {  
            $this->dados = fopen($this->arquivo, 'a+');
            //$this->nome = $_POST['nome'];
            $retorno = file_put_contents('cadastro.txt', "\n". $_POST['nome'], FILE_APPEND);
        }
    }
    
    $b = new Gravar;