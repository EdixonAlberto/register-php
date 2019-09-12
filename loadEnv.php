<?php

if (empty($_ENV)) {
    \Dotenv\Dotenv::create(__DIR__ . '../')->load();
}
