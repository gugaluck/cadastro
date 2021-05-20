<?php
    class Abrir {
        private $arquivo = 'cadastro.txt';
        private $dados;

        public function __construct() {  
            $this->dados = fopen($this->arquivo, 'a+');
            while (!feof($this->dados)) {
                echo fgets($this->dados). "<br />";
            }
            fclose($this->arquivo);
            
        }
    }
    
    $a = new Abrir;