<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

class LoggedinRoutes extends RouterGroup
{
    public function initialize()
    {
        $this->setPaths([
            'controller'=>'loggedin',
        ]);
        $this->addGet( 
            '/user',    //tampilan riwayat data user dari peminjaman dan pengembalian
            [
            'action'=>'history',
            ]
        );
        $this->addGet(  //tampilan kategori buku
            '/users/koleksi',
            [
            'action'=>'cat',
            ]
        );
        $this->addGet(  //tampilan cara menggunakan layanan
            '/users/bagaimana',
            [
            'action'=>'how',
            ]
        );
    }
}