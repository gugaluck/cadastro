<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $array;
        private $retorno;

        public function __construct() {
            $this->dados = fopen($this->arquivo, "a+");
            
            //return $this->dados;
            $this->retorno = file_put_contents('cadastro.txt', $_POST['nome'], FILE_APPEND);
            //$this->array = explode('|', $this->dados);
            //$this->explode = explode('|', $this->retorno);
            $this->retorno = file_put_contents('cadastro.txt', $_POST['valor'], FILE_APPEND);
            $this->retorno = file_put_contents('cadastro.txt', $_POST['qtdestoque']."\n", FILE_APPEND);
            echo $this->retorno;
            header('Location: index.php');
        }
    }  
    $g = new Gravar();