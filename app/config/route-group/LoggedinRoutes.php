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
        $this->addGet(  //tampilan profile user v
            '/user/profile',
            [
            'action'=>'profile',
            ]
        );
        $this->addGet(  //tampilan edit profile user
            '/user/edit-profile',
            [
            'action'=>'edit',
            ]
        );
        $this->addPost(  //post update
            '/user/profile',
            [
            'action'=>'update',
            ]
        );
        $this->addGet(  //tampilan kategori buku
            '/user/koleksi',
            [
            'action'=>'cat',
            ]
        );
        $this->addGet(  //tampilan buku di semester
            '/user/koleksi/(semester[1-8])',
            [
            'action'=>'time',
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