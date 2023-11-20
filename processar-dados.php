<?php
require_once 'config.php';

//PEGANDO OS DADOS VINDOS DO FORMULARIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

//inserindo dados nos campos da tabela 
$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) VALUES(?,?,?,?,?)");
$smtp->bind_param("sssss",$nome, $email, $mensagem, $data_atual, $hora_atual);

//se executar corretamente
if($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
}else{
    echo "Erro no envko da Mensagem!".$smtp->error;
}

$smtp->close();
$conn->close();

?>