<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        
        public function __construct() {  
            $this->dados = fopen($this->arquivo, 'r');
            $retorno = file_put_contents('cadastro.txt', '123456789123456789', FILE_USE_INCLUDE_PATH);
            echo $retorno;
        }
    }

    $b = new Gravar;