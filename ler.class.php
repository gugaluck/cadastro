<?php
    class Abrir {
        private $arquivo = 'cadastro.txt';
        private $dados;

        public function __construct() {  
            $this->dados = fopen($this->arquivo, "a+");
            $retorno = file_get_contents('cadastro.txt', FILE_USE_INCLUDE_PATH);
            echo $retorno;
        }
    }

    $a = new Abrir;
