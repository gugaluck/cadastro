<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;

        public function __construct() {
            $this->dados = fopen($this->arquivo, "a+");
            $this->nome = $_POST['nome'];
            $this->valor = $_POST['valor'];
            $this->qtdestoque = $_POST['qtdestoque'];
            
            if ((!empty($this->nome)) && (!empty($this->valor)) && (!empty($this->valor))) {
                $this->dados = file_put_contents($this->arquivo, $_POST['nome'], FILE_APPEND);
                $this->dados = file_put_contents($this->arquivo, $_POST['valor'], FILE_APPEND);
                $this->dados = file_put_contents($this->arquivo, $_POST['qtdestoque']."\n", FILE_APPEND);
                header('Location: index.php');
            } else
                echo "<script>window.location='index.php';alert('Insira todos os dados');</script>";
        }
    }  
    $g = new Gravar();