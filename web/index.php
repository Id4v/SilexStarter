<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 19/06/15
 * Time: 20:55
 */

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../Kernel.php';

$app = new \Silex\Application();

$kernel = new Kernel($app);
$kernel->setRootDir(__DIR__);
$kernel->boot();
$app->run();