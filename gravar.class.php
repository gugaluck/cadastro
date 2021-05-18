<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $linha;
        
        public function GravarArquivo() {  
            $this->$dados = fopen($this->$arquivo, 'a+');
            $this->$linha = file_put_contents($this->$dados, 'teste'."\n", FILE_USE_INCLUDE_PATH);
        }
    }   
    $b = new Gravar;