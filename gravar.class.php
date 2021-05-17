<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        
        public function GravarArquivo() {  
            $this->$dados = fopen($this->$arquivo, 'a+');
            $this->$retorno = file_put_contents($this->$dados, 'teste'."\n", FILE_APPEND);
            echo $this->$retorno;
        }
    }   
    $b = new Gravar;