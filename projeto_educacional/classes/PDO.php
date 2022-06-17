<?php
try{
    $pdo = new PDO("mysql:host=localhost; port=3306; dbname=dbplataformaeducacional", "root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT=>true]);
}catch(PDOException $e){
    echo $e->getMessage();
}