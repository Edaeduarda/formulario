<?php
$dbHost ='localhost';
$dbUsername ='root';
$dbPassword ='020558';
$dbName ='formulario-houer';


    $conexao= new MySQLi($dbHost,$dbUsername,$dbPassword, $dbName);
    if($conexao->connect_error){
        echo "Desconectado! Erro: " . $conexao->connect_error;
    }else{
        echo "Conectado!";
    }
?>