<?php

$di->set(
    'router',
    function () {
        $router = new \Phalcon\Mvc\Router(false);
        //false agar dapat dicustom routing kita
        $router->mount(
            new LoggedinRoutes()    //routing setelah login
        );
        $router->mount(
            new LoggedoutRoutes()   //routing sblm login
        );
        $router->mount(
            new SubmitRoutes()  //routing saat login/register
        );
        $router->addGet(
            '/',    //halaman awal
            [
                'controller'    => 'index',
                'action'        => 'show',
            ]
        );
        //default 404
        $router->notFound([
                'controller'    => 'index',
                'action'        => 'show404',
        ]);
        $router->removeExtraSlashes(true);
        return $router;
    }

);