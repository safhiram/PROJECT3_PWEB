<?php

use Phalcon\Mvc\Model; 

class Buku extends Model 
{     
    public $id_buku;     
    public $judul_buku;
    public $jumlah_halaman;     
    public $deskripsi_buku;
    public $tersedia;     
    public $semester;
    public $gambar;

    public function initialize(){
        $this->setSource('book'); 
    }
}