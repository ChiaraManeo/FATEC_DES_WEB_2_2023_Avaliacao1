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
</head>
<body>
    <p>
    
        <a href="cadastro.php" class="btn btn-primary">Cadastrar Emprestimos</a>
           
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>