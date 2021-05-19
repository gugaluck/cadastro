<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        private $retorno;

        public function __construct() {
            $this->dados = fopen($this->arquivo, "a+");
            $this->nome = $_POST['nome'];
            $this->retorno = file_put_contents($this->arquivo, '156165'."\n", FILE_USE_INCLUDE_PATH);
            echo $this->retorno;
        }
    }  
    $g = new Gravar();