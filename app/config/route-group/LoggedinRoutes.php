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
            '/home',    //tampilan awal v
            [
            'action'=>'show',
            ]
        );
        $this->addGet(
            '/admin/list-register',   //query regis 
            [
            'action'=>'register',
            ]
        );
        $this->addGet(
            '/admin/list-sumbang',   //query sumbang 
            [
            'action'=>'sumbang',
            ]
        );
        $this->addGet(
            '/admin/list-reservasi',   //query reservasi 
            [
            'action'=>'reservasi',
            ]
        );
        $this->addGet(
            '/admin',   //query buku semua
            [
            'action'=>'preview',
            ]
        );
        $this->addPost(
            '/admin/del/:int',   //query buku semua
            [
            'action'=>'deleting',
            ]
        );
        $this->addGet(
            '/admin/buku',
            [
            'action'=>'book',
            ]
        );
        $this->addPost(
            '/admin/buku',
            [
            'action'=>'regis',
            ]
        );
        $this->addGet( 
            '/user',    //tampilan riwayat data user dari peminjaman dan pengembalian v
            [
            'action'=>'history',
            ]
        );
        $this->addGet( 
            '/user/chat',    //tampilan riwayat data user dari peminjaman dan pengembalian v
            [
            'action'=>'chat',
            ]
        );
        $this->addGet( 
            '/user/kembali/:int',    //tampilan riwayat data user dari peminjaman dan pengembalian v
            [
            'action'=>'kembali',
            'id'=>1,
            ]
        );
        $this->addPost( 
            '/user/kembali/:int',    //tampilan riwayat data user dari peminjaman dan pengembalian v
            [
            'action'=>'returned',
            'id'=>1,
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
            '/user/koleksi/semester/([1-8]{1})',
            [
            'action'=>'time',
            'semester'=> 1,
            ]
        );
        $this->addGet(  //tampilan cara menggunakan layanan v
            '/user/bagaimana',
            [
            'action'=>'how',
            ]
        );
        $this->addGet(  //tampilan reservasi v
            '/user/koleksi/semester/([1-8]{1})/:int',
            [
            'action'=>'pesan',
            'semester'=> 1,
            'id' => 2,
            ]
        );
        $this->addPost(  //tampilan reservasi v
            '/user/koleksi/semester/([1-8]{1})/:int',
            [
            'action'=>'pinjam',
            'semester'=> 1,
            'id' => 2,
            ]
        );
    }
}