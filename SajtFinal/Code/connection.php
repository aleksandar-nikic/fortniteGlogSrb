<?php

require_once "config.php";

try{
    $connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8",USERNAME,PASSWORD);

    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

}catch (PDOException $e){
    echo $e->getMessage();
}

function selectQuery($upit){
    global $connection;

    $rezultat = $connection->query($upit)->fetchAll();

    return $rezultat;
}
