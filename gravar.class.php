<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        
        public function __construct($arquivo) {  
            $this->$dados = fopen($this->$arquivo, 'a+');
            //$this->nome = $_POST['nome'];
            $this->$retorno = file_put_contents($arquivo, 'teste'."\n", FILE_APPEND);
        }
    }  
    $g = new Gravar;