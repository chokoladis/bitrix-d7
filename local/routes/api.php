<?php

use Bitrix\Main\Routing\RoutingConfigurator;

return function (RoutingConfigurator $routes) {

    $routes->get('/test', function(){
        return 11;
    });
};