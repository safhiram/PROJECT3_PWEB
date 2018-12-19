<?php

$di->set(     
    'voltService',     
    function ($view, $di) {         
        $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di); 
        
        $volt->setOptions([             
            "compiledPath"      => APP_PATH . "/cache/",             
            "compiledExtension" => ".compiled",             
            "compileAlways"     => true,
            //pada mode release ganti false, krn ga banyak perubahan   
        ]); 
    return $volt;     
    } 
); 

$di->set(     
    'view',     
    function () {         
        //view
        $view = new \Phalcon\Mvc\View();   

        $view->setViewsDir(APP_PATH . "/views");         
        // echo APP_PATH."\\views"; 
        
        //kalo pake template engine volt di uncomment
        // $view->registerEngines([             
        //     ".volt" => "voltService",         
        // ]); 
    return $view;     
    } 
);  

$di->set(     
    'db',     
    function () use ($config) {         
        $dbAdapter = $config->database->adapter;                  
        return new $dbAdapter([             
            "host" => $config->database->host,             
            "username" => $config->database->username,             
            "password" => $config->database->password,             
            "dbname" => $config->database->dbname,
            "options" => [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC],
        ]);     
    }
); 

$di->set(     
    'url',     
    function () use ($config, $di) {         
        $url = new \Phalcon\Mvc\Url(); 
 
        $url->setBaseUri($config->path('url.baseUrl')); 

        return $url;     
    } 
);

$di->set(     
    'session',     
    function () {         
        $session = new Phalcon\Session\Adapter\Files();
        
        $session->start();

        return $session;
    } 
);

$di->set(     
    'flash',     
    function () {         
        return new Phalcon\Flash\Direct(
            [
                'error'   => 'alert alert-danger',
                'success' => 'alert alert-success',
                'notice'  => 'alert alert-info',
                'warning' => 'alert alert-warning',
            ]
        );
    } 
);

$di->set(     
    'flashSession',     
    function () {         
        return new Phalcon\Flash\Session(
            [
                'error'   => 'alert alert-danger',
                'success' => 'alert alert-success',
                'notice'  => 'alert alert-info',
                'warning' => 'alert alert-warning',
            ]
        );
    } 
);

$di->set(
    'modelsManager',
    function () {
        return new Phalcon\Mvc\Model\Manager();
    }
);