<?php
    class Abrir {
        private $q_scores = array();
        private $arquivo = "cadastro.txt";
        private $dados;

        public function __construct() {  
            $this->dados = fopen($this->arquivo, "r");
            $retorno = file_get_contents("cadastro.txt");
              //echo $this->dados;
              echo $retorno;;
              
        }
    }

$a = new Abrir;
