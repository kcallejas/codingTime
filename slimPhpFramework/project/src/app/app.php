<?php

// App instantiation
require_once __DIR__ . '/config.php';
$app = new \Slim\App(["settings" => $config]);

// Dependency injector
require_once __DIR__ . '/dependencyInjection.php';

// Routes
require_once __DIR__ . '/routes.php';
