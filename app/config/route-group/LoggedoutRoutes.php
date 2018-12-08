<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

class LoggedoutRoutes extends RouterGroup
{
    public function initialize()
    {
        $this->setPaths([
            'controller'=>'loggedout',
        ]);
        $this->addGet(
            '/koleksi',    //tampilan kategori buku sblm login
            [
            'action'=>'cat',
            ]
        );
        $this->addGet(
            '/bagaimana',   //tampilan cara menggunakan layanan sblm login
            [
            'action'=>'how',
            ]
        );
        $this->addGet(
            '/sumbang',     //tampilan form jadwal bertemu&menyumbang buku
            [
            'action'=>'charity',
            ]
        );
        $this->addPost(
            '/sumbang',     //tampilan form jadwal bertemu&menyumbang buku
            [
            'action'=>'call',
            ]
        );
    }
}