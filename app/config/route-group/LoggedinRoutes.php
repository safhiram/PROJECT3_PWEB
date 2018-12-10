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
        $this->addGet(  //tampilan profile user
            '/users/profile',
            [
            'action'=>'profile',
            ]
        );
        $this->addGet(  //tampilan edit profile user
            '/users/edit-profile',
            [
            'action'=>'edit',
            ]
        );
        $this->addPost(  //post update
            '/users/update-profile',
            [
            'action'=>'update',
            ]
        );
        $this->addGet(  //tampilan kategori buku
            '/users/koleksi',
            [
            'action'=>'cat',
            ]
        );
        $this->addGet(  //tampilan buku di semester
            '/users/koleksiku/(semester[1-8])',
            [
            'action'=>'time',
            ]
        );
        $this->addGet(  //tampilan buku X dari semester Y
            '/users/koleksiku/(semester[1-8])/.id=[0-9]',
            [
            'action'=>'book',
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