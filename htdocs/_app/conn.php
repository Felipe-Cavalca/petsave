<?php

try 
{
    $pdo = new PDO('mysql:host=sql110.unaux.com;dbname=unaux_26430904_petsave;charset=utf8', 'unaux_26430904', 'n5wd3zbj');
}
catch (PDOException $e) 
{
    echo $e->getMessage() . "</p>";
    die("nao foi possivel se conectar a base de dados");
}