<?php

$env = (object) $_ENV;

$db = function () use ($env) {
    try {
        $stringConnection = "{$env->DB_ENGINE}:host={$env->DB_HOST};port={$env->DB_PORT};dbname={$env->DB_NAME}";
        return new PDO($stringConnection, $env->DB_USER, $env->DB_PASS);
    } catch (PDOException $err) {
        echo "ERROR DATABASE: {$err}";
    }
};
