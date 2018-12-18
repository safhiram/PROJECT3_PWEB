<?php

use Phalcon\Mvc\Model; 

class Reservasi extends Model 
{     
    public $id_reservasi;     
    public $buku_id;
    public $user_id;     
    public $status;
    public $nomorhp;     
    public $tanggal_bertemu;

    public function initialize(){
        $this->setSource('reservasi'); 
    }
}