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
            '/koleksi',    //tampilan kategori buku sblm login v
            [
            'action'=>'cat',
            ]
        );
        $this->addGet(  //tampilan buku di semester v
            '/koleksi/semester/[1-8]{1}',
            [
            'action'=>'time',
            'semester'=> 1,
            ]
        );
        $this->addGet(
            '/bagaimana',   //tampilan cara menggunakan layanan sblm login v
            [
            'action'=>'how',
            ]
        );
        $this->addGet(
            '/sumbang',     //tampilan form jadwal bertemu v
            [
            'action'=>'charity',
            ]
        );
        $this->addPost(
            '/sumbang',     //post form
            [
            'action'=>'call',
            ]
        );
    }
}