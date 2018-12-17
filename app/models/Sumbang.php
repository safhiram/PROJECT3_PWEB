<?php

use Phalcon\Mvc\Model; 

class Sumbang extends Model 
{     
    public $id_sumbang;     
    public $nrp;     
    public $nama;
    public $email;     
    public $no_hp;     
    public $departemen;
    public $universitas;
    public $judul_bukusumbang;
    public $jumlah_halamansumbang;
    public $deskripsi_bukusumbang;
    public $status;
    public $semester;
    public $gambarsumbang;

    public function initialize(){
        $this->setSource('sumbang'); 
    }
}