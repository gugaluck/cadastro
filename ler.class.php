<?php
    class Abrir {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $linha;

        public function __construct() {  
            $this->$dados = fopen("cadastro.txt", "a+");
            while (!feof($this->$dados)) {
                $this->$linha = fgets("cadastro.txt", 1024);
                echo $this->$linha.'<br />';
            }
        }
    }

    $a = new Abrir;
