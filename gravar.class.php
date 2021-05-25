<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $array;
        private $retorno;

        public function __construct() {
            $this->dados = fopen($this->arquivo, "a+");
            $this->retorno = file_put_contents($this->arquivo, $_POST['nome'], FILE_APPEND);
            //$this->array = explode('|', $this->retorno);
            $this->retorno = file_put_contents($this->arquivo, $_POST['valor'], FILE_APPEND);
            $this->retorno = file_put_contents($this->arquivo, $_POST['qtdestoque']."\n", FILE_APPEND);
            echo $this->retorno;
            header('Location: index.php');
        }
    }  
    $g = new Gravar();