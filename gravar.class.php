<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        private $retorno;

        
        public function __construct($arquivo = "cadastro.txt") {  
            if(file_exists($arquivo)){
                $this->$dados = fopen($this->$arquivo, "a+");
                $this->$nome = $_POST['nome'];
                $this->$retorno = file_put_contents($arquivo, $_POST['nome']."\n", FILE_APPEND);
                echo $this->$retorno;
            }
            else 
                echo 'Arquivo não existe';
        }
    }  
    $g = new Gravar;