<?php
    class Abrir {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $linha;

        public function LerArquivo() {  
            echo $dados;
            $this->$dados = fopen($this->$arquivo, 'a+');
            $dados = file_get_contents($this->$arquivo, FILE_USE_INCLUDE_PATH);
            while (!feof($this->$dados)) {
                $this->$dados = fgets($this->$dados, 1024);
                echo $this->$linha.'<br />';
            }
        }
    }

    $a = new Abrir;
