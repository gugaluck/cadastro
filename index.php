<html>
    <h1>Sistema de cadastro em arquivo .txt</h1> 
    <form method="POST" action="gravar.class.php">
        <input type="text" name="nome" placeholder="Digite o nome" /><br>
        <input type="text" name="valor" placeholder="Digite o valor" /><br>
        <input type="text" name="qtdestoque" placeholder="Digite o quantidade em estoque" /><br>
        <input type="submit" value="enviar">    
    </form>
</html>

<?php 
    //include ('ler.class.php');
    //include ('gravar.class.php');
    $dados = fopen('cadastro.txt', 'a+');
            while (!feof($dados)) {
                $linha = fgets('cadastro.txt', 1024);
                echo $linha. '<br />';
            }