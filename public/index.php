<?php

require_once '../vendor/autoload.php';

use App\Core\Application;
use App\Http\Controller\FourthTaskController;
use App\Http\Controller\SecondTaskController;
use App\Http\Controller\ThirdTaskController;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$envConfig = [
    'db' => [
        'dsn' => $_ENV['DSN'],
        'user' => $_ENV['USER'],
        'password' => $_ENV['PASSWORD'],
    ]
];

$application = new Application($envConfig);

$application->router->get('/test-task/second-task', 'second_task');

$application->router->get('/test-task/second-task/show-answer', [
    SecondTaskController::class,
    'searchingInArray'
]);

$application->router->get('/test-task/third-task', [
    ThirdTaskController::class,
    'createNewArray'
]);

$application->router->get('/test-task/fourth-task', [
    FourthTaskController::class,
    'get'
]);

$application->run();

