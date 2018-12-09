<?php

use Phalcon\Mvc\Model; 

class Register extends Model 
{     
    public $id;     
    public $username;
    public $nrp;     
    public $email;
    public $password;     
    public $role;

    public function initialize(){
        $this->setSource('register'); 
    }
}