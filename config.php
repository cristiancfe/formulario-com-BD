<?php

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




?>