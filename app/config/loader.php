<?php 
 
$loader = new \Phalcon\Loader(); 
//menambahkan kelas yg kita buat melalui list direktori 
$loader->registerDirs(     
    [         
        APP_PATH . '/controllers/',         
        APP_PATH . '/models/', 
        APP_PATH . '/config/route-group/', 
        ] 
); 
 $loader->registerNamespaces(
    [
        'App\Forms' => APP_PATH . '/forms/',
    ]
);
$loader->register();