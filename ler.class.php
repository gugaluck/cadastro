<?php
    class Abrir {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $linha;

        public function __construct($arquivo) {  
            $this->dados = fopen($this->arquivo, 'a+');
            if ($this->dados) {
                while (($linha = fgets($this->$arquivo)) !== false) {
                    //$this->linha = fgets($this->arquivo, 1024);
                    echo $this->linha. '<br />';
                }
                $this->$dados = fclose($this->$arquivo);
            } else
                echo 'Arquivo não localizado';
        }
    }
    $a = new Abrir;