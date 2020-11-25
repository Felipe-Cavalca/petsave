<?php

session_start();

$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
$senha_codificada = MD5($senha);

include '../_app/conn.php';
$sth = $pdo->prepare('select *from cliente where usu_email = :email and usu_senha = :senha');
$sth->bindValue(":email", $email);
$sth->bindValue(":senha", $senha_codificada);
$sth->execute();

if ($sth->rowCount() > 0):
    $_SESSION['Login']['email'] = $email;
    $_SESSION['Login']['senha'] = $senha_codificada;
    header('LOCATION:home.php');
else:
    header('LOCATION:index.php');
endif;

