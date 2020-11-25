<?php

include '../_app/conn.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
$senha_codificada = MD5($senha);

$sth = $pdo->prepare("INSERT INTO cliente (usu_nome, usu_sobrenome, usu_email, usu_senha) VALUES (:nome,:sobrenome,:email,:senha)");

$sth->bindValue(":nome", $nome);
$sth->bindValue(":sobrenome", $sobrenome);
$sth->bindValue(":email", $email);
$sth->bindValue(":senha", $senha_codificada);

$sth->execute();

echo $pdo->lastInsertId();

header('Location:home.php')

