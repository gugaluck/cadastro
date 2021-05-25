<html>
    <link href="index.css" rel="stylesheet">
    <h1>Sistema de cadastro em arquivo .txt</h1> 
    <div>
        <form method="POST" action="gravar.class.php">
            <input type="text" name="nome" placeholder="Nome"/>
            <input type="text" name="valor" placeholder="Valor"/>
            <input type="text" name="qtdestoque" placeholder="Quantidade em estoque"/>
            <input type="submit" value="Enviar">   
        </form>
    </div>
</html>

<?php 
    include ('ler.class.php');
    include ('gravar.class.php');