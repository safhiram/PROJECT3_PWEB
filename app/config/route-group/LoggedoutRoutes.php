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
        $this->addGet(  //tampilan buku di semester
            '/koleksi/(semester[1-8])',
            [
            'action'=>'time',
            ]
        );
        $this->addGet(
            '/bagaimana',   //tampilan cara menggunakan layanan sblm login
            [
            'action'=>'how',
            ]
        );
        $this->addGet(
            '/sumbang',     //tampilan form jadwal bertemu
            [
            'action'=>'identity',
            ]
        );
        $this->addGet(
            '/sumbang-buku',     //tampilan form menyumbang buku
            [
            'action'=>'charity',
            ]
        );
        $this->addPost(
            '/bukti-sumbang',     //post form
            [
            'action'=>'call',
            ]
        );
    }
}