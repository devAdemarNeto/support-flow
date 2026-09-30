<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use SupportFlow\Utils\Env;
use SupportFlow\Utils\Router;

Env::load(dirname(__DIR__) . '/.env');

$appConfig = require dirname(__DIR__) . '/config/app.php';

if (!empty($appConfig['debug'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    ini_set('display_errors', '0');
}

session_start();

$router = new Router();

$router->get('/', function () {
    echo '<!DOCTYPE html>' . PHP_EOL;
    echo '<html lang="pt-BR">' . PHP_EOL;
    echo '<head>' . PHP_EOL;
    echo '    <meta charset="UTF-8">' . PHP_EOL;
    echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">' . PHP_EOL;
    echo '    <title>SupportFlow</title>' . PHP_EOL;
    echo '</head>' . PHP_EOL;
    echo '<body>' . PHP_EOL;
    echo '    <h1>SupportFlow</h1>' . PHP_EOL;
    echo '    <p>Aplicação inicializada com sucesso.</p>' . PHP_EOL;
    echo '</body>' . PHP_EOL;
    echo '</html>' . PHP_EOL;
});

$router->get('/health', function () {
    echo 'OK';
});

$router->dispatch();


