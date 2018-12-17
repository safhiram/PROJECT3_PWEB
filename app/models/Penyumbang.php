<?php

use Phalcon\Mvc\Model; 

class Penyumbang extends Model 
{     
    public $nrp;     
    public $name;
    public $email;     
    public $nohp;     
    public $departemen;
    public $universitas;
    public $judulbuku;
    public $tebalhalaman;
    public $deskripsibuku;
    public $gambar;

    public function initialize(){
        $this->setSource('sumbang'); 
    }
}