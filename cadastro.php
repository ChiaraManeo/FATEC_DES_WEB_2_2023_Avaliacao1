<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Emprestimos</title>
</head>
<body>
    <div>
        <h2>Efetue nos campos abaixo o cadastro: </h2>
        <form action="cadastrar.php" method="post">
            <div>
                <input type="text" name="nomealuno" class="form-control" value="" placeholder="Digite o nome do aluno" required>
                <span class="help-block"></span>
            </div>
            <div>
                <input type="text" name="titulo" class="form-control" value="" placeholder="Digite o titulo do livro" required>
                <span class="help-block"></span>
            </div>
            <div>
                <input type="text" name="autor" class="form-control" value="" placeholder="Digite o autor" required>
                <span class="help-block"></span>
            </div>     
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="cadastar">
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>
            </div>
        </form>
    </div>    
</body></center>
</html>