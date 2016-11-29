<?php

$container = $app->getContainer();

$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $logFileHandler = new \Monolog\Handler\StreamHandler("../logs/app.log");
    $logger->pushHandler($logFileHandler);
    return $logger;
};
