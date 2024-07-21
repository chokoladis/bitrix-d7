<?php

use Bitrix\Main\Routing\RoutingConfigurator;
use Ms\Main\Controllers\TestController;

return function (RoutingConfigurator $routes) {

    $routes->get('/test', [TestController::class, 'index']);
};