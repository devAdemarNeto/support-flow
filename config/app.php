<?php

use SupportFlow\Utils\Env;

return [
    'env' => Env::get('APP_ENV', 'production'),
    'debug' => filter_var(Env::get('APP_DEBUG', false), FILTER_VALIDATE_BOOLEAN),
];
