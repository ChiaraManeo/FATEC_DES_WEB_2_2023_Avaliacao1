<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
         header("location: inicio.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
</head>
<body>
    <div>
        <h2>Acesso à biblioteca FATEC</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <input type="text" name="username" class="form-control" value="" placeholder="Digite o usuário" required>
            </div>    
            <div>
                <input type="password" name="password" class="form-control" value="" placeholder="Digite a senha" required>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Logar">
            </div>
        </form>
    </div>    
</body></center>
</html>