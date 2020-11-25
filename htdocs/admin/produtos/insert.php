<?php

include '../../_app/conn.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_DEFAULT);
$valor = filter_input(INPUT_POST, 'valor', FILTER_DEFAULT);
$qtd = filter_input(INPUT_POST, 'qtd', FILTER_DEFAULT);

$sth = $pdo->prepare("INSERT INTO produtos (pro_nome, pro_descricao, pro_tipo, pro_valor, pro_qtd) VALUES (:nome,:descricao,:tipo,:valor,:qtd)");

$sth->bindValue(":nome", $nome);
$sth->bindValue(":descricao", $descricao);
$sth->bindValue(":tipo", $tipo);
$sth->bindValue(":valor", $valor);
$sth->bindValue(":qtd", $qtd);

$sth->execute();

echo $pdo->lastInsertId();

echo '</p><a href="../home.php">Voltar ao menu</a>';

