<?php
    class Abrir {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $linha;

        public function __construct($arquivo = 'cadastro.txt') {  
            $this->$dados = fopen($this->$arquivo, 'a+');
            while (!feof($this->$dados)) {
                $this->$linha = fgets($this->$arquivo, 1024);
                echo $this->$linha. '<br />';
            }
        }
    }
    $a = new Abrir;