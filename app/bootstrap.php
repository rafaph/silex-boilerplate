<?php
/**
 * Autoloading namespaces
 */
require_once __DIR__ . '/../vendor/autoload.php';
/**
 * Require configurations
 */
$config = require_once __DIR__ . '/config.php';
/**
 * Set timezone
 */
date_default_timezone_set($config['timezone']);
/**
 * Require routes
 */
$routes = require_once __DIR__ . '/routes.php';
/**
 * Init app instance
 */
$app = new Silex\Application();
/**
 * Register twig as template engine
 */
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => $config['views_path']
]);
/**
 * Set debug
 */
$app['debug'] = $config['debug'];
/**
 * Registering routes
 */
foreach ($routes as $route) {
    $app->match($route['url'], $route['action'])->method($route['method']);
}

return $app;
