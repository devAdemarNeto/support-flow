<?php

use SupportFlow\Utils\Env;

return [
    'host' => Env::get('DB_HOST', 'localhost'),
    'port' => Env::get('DB_PORT', '5432'),
    'dbname' => Env::get('DB_NAME', ''),
    'user' => Env::get('DB_USER', ''),
    'password' => Env::get('DB_PASSWORD', ''),
];
