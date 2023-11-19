<?php

$senhaSecreta = "123";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $senhadigitada = $_POST['senha'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    
    <title>Ver Mensagens</title>
</head>
<body>
    <form method="post">
        <label for="senha">Senha </label>
        <input type="password" name="senha" placeholder="digite sua senha" required >
       
        <button type="submit">Enviar</button>

    </form>
</body>
</html>