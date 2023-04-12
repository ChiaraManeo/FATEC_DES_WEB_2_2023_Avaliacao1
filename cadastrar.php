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

<?php

if(!file_exists("livros.txt")){
    $handle = fopen("livros.txt", "w");
} else {
    $handle = fopen("livros.txt", "a");
}    

fwrite($handle, "Nome do aluno: " . $_POST['nomealuno'] . PHP_EOL);
fwrite($handle, "Titulo do livro: " . $_POST['titulo'] . PHP_EOL);
fwrite($handle, "Autor: " . $_POST['autor'] . "\n" . PHP_EOL);
fflush($handle);
fclose($handle);



$handle = fopen("livros.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);


?>    
        
        <a href="cadastro.php" class="btn btn-primary">Novo cadastro</a>

       
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>