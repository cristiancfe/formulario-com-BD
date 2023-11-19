<?php
//PEGANDO OS DADOS VINDOS DO FORMULARIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

//CONFIGURANDO CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'formulario';

//CONEXÃO COM NOSSO BANCO DE DADOS
$conn = new mysqli($server, $usuario, $senha, $banco);

//TESTANDO A CONEXÃO COM BANCO DE DADOS
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
}
//inserindo dados nos campos da tabela 
$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) VALUES(?,?,?,?,?)");
$smtp->bind_param("sssss",$nome, $email, $mensagem, $data_atual, $hora_atual);

if($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
}else{
    echo "Erro no envko da Mensagem!".$smtp->error;
}

$smtp->close();
$conn->close();

?>