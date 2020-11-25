<?php

$host = '111.11.11.11';
$user = 'user';
$password = 'password';
$database = 'database';
$port = '1111';

try {
    $strcon = new PDO('sqlsrv:Server='.$host.';Database='.$database, $user, $password);
    $strcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::SQLSRV_ENCODING_UTF8);
} catch(PDOException $e) {
    die('Falha na conexão com o banco de dados');
}

?>