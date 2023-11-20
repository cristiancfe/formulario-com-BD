<?php
require_once 'config.php';

$senhaSecreta = "123";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $senhadigitada = $_POST['senha'];
    if($senhadigitada === $senhaSecreta){
        $sql = "SELECT *FROM mensagens";
        $result = $conn->query($sql);
    }else{
        echo "senha incorreta!";
    }
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
<div class="mensagens">
    <?php if(isset($result) && $result->num_rows > 0) : ?>
        <h2>Mensagens</h2>
        <ul>
            <?php while($row = $result->fetch_assoc()) : ?>
                <li>
                    <strong>Nome: </strong> <?php echo $row["nome"]; ?> <br>
                    <strong>Email: </strong> <?php echo $row["email"]; ?> <br>
                    <strong>mensagem: </strong> <?php echo $row["mensagem"]; ?> <br>
                    <strong>Data e Hora: </strong> <?php echo $row["data"]." às ".$row["hora"]; ?> <br>
                </li>
            <?php endwhile; ?>
        </ul>
        <?php else : ?>
            <p>Nenhuma mensagem encontrada.</p>
            <?php endif; ?>
            </div>

</body>
</html>