<?php

require __DIR__ . '/vendor/autoload.php';
require './loadEnv.php';
require './database/db.php';

$query = $db()->prepare("SELECT * FROM users");

$query->execute();

var_dump($query->fetch(PDO::FETCH_OBJ));
