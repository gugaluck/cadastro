<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        private $retorno;

        public function __construct() {
            $this->dados = fopen($this->arquivo, "a+");
            $this->retorno = file_put_contents('cadastro.txt', $_POST['nome'], FILE_APPEND);
            $this->retorno = file_put_contents('cadastro.txt', $_POST['valor'], FILE_APPEND);
            $this->retorno = file_put_contents('cadastro.txt', $_POST['qtdestoque']."\n", FILE_APPEND);
            echo $this->retorno;
            header('Location: index.php');
        }
    }  
    $g = new Gravar();