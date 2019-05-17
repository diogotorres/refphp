<?php

require('ConnectionFactory.class.php');

$con = ConnectionFactory::getConnection();

if($con->connect_errno){
    echo('Erro ao conectar:') . $connect_error;
    exit();
}

$cep = $_POST['txtCep'];
$logradouro = $_POST['txtLogradouro'];
$bairro = $_POST['txtBairro'];
$cidade = $_POST['txtCidade'];
$estado = $_POST['txtEstado'];

$sql = "INSERT INTO enderecos (cep, logradouro, bairro, cidade, estado) VALUES('$cep', '$logradouro', '$bairro', '$cidade', '$estado')";

if(mysqli_query($con, $sql)){
    echo 'Endereço salvo com sucesso!';
} else {
    echo 'Erro ao salvar endereço: ' . $con->error;
}

