<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=techneon", "root", "");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
