<?php 
    $dbHost='localhost';
    $dbUser='root';
    $dbPass='';
    $dbName='trabalhoprog';

    $conexao = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

    // if ($conexao->connect_errno) {
    //     echo "Erro";
    // } else
    //     echo "OK";

?>