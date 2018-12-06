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
            '/user/kategori',
            [
            'action'=>'cat',
            ]
        );
        $this->addGet(  //tampilan cara menggunakan layanan
            '/user/bagaimana',
            [
            'action'=>'how',
            ]
        );
    }
}