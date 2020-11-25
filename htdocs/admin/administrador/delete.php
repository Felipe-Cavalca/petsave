<?php

include '../../_app/conn.php';

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$sth = $pdo->prepare("DELETE from admin WHERE 'id_adm'=:id");

$sth->bindValue(":id", $id, PDO::PARAM_INT);

$sth->execute();

if ($sth->execute() )
{
    echo "Registro excluido com sucesso.";
    echo '</p><a href="select.php"><h3>voltar</h3></a>';
}
else
{
    echo "<h1>Por algum motivo nao foi possivel excluir esse registro.</h1>";
    echo '</p><a href="select.php"><h3>voltar</h3></a>';
}

echo "registro numero" . $id;

