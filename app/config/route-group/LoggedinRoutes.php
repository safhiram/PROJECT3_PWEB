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
            '/user',    //tampilan riwayat data user dari peminjaman dan pengembalian v
            [
            'action'=>'history',
            ]
        );
        $this->addGet(  //tampilan profile user v
            '/user/profile',
            [
            'action'=>'profile',
            ]
        );
        $this->addGet(  //tampilan edit profile user v
            '/user/edit-profile',
            [
            'action'=>'edit',
            ]
        );
        $this->addPost(  //post update v
            '/user/profile',
            [
            'action'=>'update',
            ]
        );
        $this->addGet(  //tampilan kategori buku v
            '/user/koleksi',
            [
            'action'=>'cat',
            ]
        );
        $this->addGet(  //tampilan buku di semester v
            '/user/koleksi/(semester[1-8])',
            [
            'action'=>'time',
            ]
        );
        $this->addGet(  //tampilan cara menggunakan layanan v
            '/user/bagaimana',
            [
            'action'=>'how',
            ]
        );
    }
}