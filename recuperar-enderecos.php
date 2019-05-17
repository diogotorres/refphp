<?php

require('ConnectionFactory.class.php');

$con = ConnectionFactory::getConnection();

if($con->connect_errno){
    echo('Erro ao conectar:') . $connect_error;
    exit();
}

$sql = "SELECT * FROM enderecos";
$query = mysqli_query($con, $sql);
$enderecos = array();

while($row = $query->fetch_assoc()){
    $enderecos[] = $row;
}

$query->close();
echo json_encode($enderecos);