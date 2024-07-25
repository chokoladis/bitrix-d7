<?php

use Bitrix\Main\Routing\RoutingConfigurator;
use Ms\Base\Main\Controllers\NewsController;

return function (RoutingConfigurator $routes) {

    $routes->prefix('api')->group(function(RoutingConfigurator $routes){

        $routes->prefix('get')->group(function(RoutingConfigurator $routes){
            
            $routes->prefix('news')->group(function(RoutingConfigurator $routes){

                $routes->get('', [NewsController::class, 'popular'])->name('news.popular');
                $routes->get('page/{page}', [NewsController::class, 'news.page']);
                $routes->get('{id}', [NewsController::class, 'news.detail']);

                $routes->prefix('year/')->group(function(RoutingConfigurator $routes){
                    $routes->get('{year}', [NewsController::class, 'news.year']);
                    $routes->get('{year}/{page}', [NewsController::class, 'news.year.page']);
                });

            });
        });

        $routes->prefix('post')->group(function(RoutingConfigurator $routes){

            $routes->prefix('news')->group(function(RoutingConfigurator $routes){

                $routes->post('', [NewsController::class, 'news.store']);
                $routes->post('update', [NewsController::class, 'news.update']);
                $routes->post('delete', [NewsController::class, 'news.delete']);
            });
            
        });

    });
    
};