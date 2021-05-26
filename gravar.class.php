<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $array;
        private $retorno;

        public function __construct() {
            $this->dados = fopen($this->arquivo, "a+");
            $this->nome = $_POST['nome'];
            $this->valor = $_POST['valor'];
            $this->qtdestoque = $_POST['qtdestoque'];
            if ($_POST['nome'] == "empty") {
                echo "<p> Você não digitou todos os campos! </p>";
                exit();
            } elseif ($_POST['valor'] == "empty") {
                echo "<p> Você não digitou todos os campos! </p>";
                exit();
            } elseif ($_POST['qtdestoque'] == "empty") {
                echo "<p> Você não digitou todos os campos! </p>";
                exit();
            } else {
                $this->retorno = file_put_contents($this->arquivo, $_POST['nome'], FILE_APPEND);
                //$this->array = explode('|', $this->retorno);
                $this->retorno = file_put_contents($this->arquivo, $_POST['valor'], FILE_APPEND);
                $this->retorno = file_put_contents($this->arquivo, $_POST['qtdestoque']."\n", FILE_APPEND);
            }
            echo $this->retorno;
            header('Location: index.php');
        
        }
    }  
    $g = new Gravar();