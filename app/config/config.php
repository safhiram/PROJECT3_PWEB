<?php 
 
use Phalcon\Config; 
 
return new Config([ 
 
    'database' => [         
        'adapter' => 'Phalcon\Db\Adapter\Pdo\Mysql',         
        'host' => '127.0.0.1',         
        //DEPLOY SERVER LP2
        //'host' => '10.151.62.127',         
        'username' => 'root',         
        //DEPLOY SERVER LP2
        //'username' => 'user-pweb',
        'password' => '',         
        //DEPLOY SERVER LP2
        //'password' => 'user-pweb1718',
        'dbname' => 'bookesma'
        //DEPLOY SERVER LP2
        //'dbname' => 'PWEB_F_3'
    ],     
    'url' => [         
        'baseUrl' => 'http://localhost/bookesma.com/'     
        //DEPLOY SERVER LP2
        // 'baseUrl' => 'http://10.151.62.127/FP_PWEB_F/FP_PWEB_F/3/'     
    ] 
]); 