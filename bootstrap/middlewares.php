<?php
if($config['settings']['debug'] && $config['settings']['tracy']['active']) {
    $app->add(new RunTracy\Middlewares\TracyMiddleware($app));
}

$appMiddleWare = new \App\Middleware\AppMiddleware($app->getContainer());
$app->add($appMiddleWare);

$flashMiddleWare = new \App\Middleware\FlashMessageMiddleWare($app->getContainer());
$app->add($flashMiddleWare);


$timerMiddleWare = new \App\Middleware\TimerMiddleware($app->getContainer());
$app->add($timerMiddleWare);


