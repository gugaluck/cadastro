<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        
        public function __construct() {  
            $this->dados = fopen($this->arquivo, 'r');
            $this->nome = $_REQUEST['nome'];
            $retorno = file_put_contents('cadastro.txt', $this->nome, FILE_USE_INCLUDE_PATH);
            echo $retorno;
        }
    }
    

    $b = new Gravar;