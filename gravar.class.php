<?php
    class Gravar {
        private $arquivo = 'cadastro.txt';
        private $dados;
        private $nome;
        
        public function __construct() {  
            $this->dados = fopen($this->arquivo, 'a+');
            //$this->nome = $_POST['nome'];
            $retorno = file_put_contents('cadastro.txt', 'teste'."\n", FILE_APPEND);
        }
    }   
    /*echo "<script>
	alert('deu boa piazao');
	</script>";*/
    $b = new Gravar;