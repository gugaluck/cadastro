<html>
    <h1>Sistema de cadastro</h1> 
    <form method="POST" action="index.php">
        <input type="text" name="nome" placeholder="Digite o nome" /><br>
        <input type="text" name="valor" placeholder="Digite o valor" /><br>
        <input type="text" name="qtdestoque" placeholder="Digite o quantidade em estoque" /><br>
        <input type="submit" value="enviar">    
    </form>
</html>

<?php 
    include ('arquivo.class.php');
    /*$arquivo = fopen("cadastro.txt") or die("naum foi possível abrir o arquivo");
    if (isset($_POST["arquivo"])) {
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $qtdestoque = $_POST['qtdestoque'];
    }
    
    
    print file_get_contents('cadastro.txt');
    header ('Location: index.php');

*/