<?php

try {
    $pdo = new PDO('mysql:dbname=forum;host=localhost','isox', 'egJZt7kmpjMs8WrN');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}