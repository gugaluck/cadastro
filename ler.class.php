<?php
    class Abrir {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $linha;

        public function LerArquivo() {  
            $this->$dados = fopen($this->$arquivos, "a+");
            while (!feof($this->$dados)) {
                $this->$linha = fgets($this->$dados, 1024);
                echo $this->$linha.'<br />';
            }
        }
    }

    $a = new Abrir;
