<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

class SubmitRoutes extends RouterGroup
{
    public function initialize()
    {
        $this->setPaths([
            'controller'=>'submit',
        ]);
        $this->addGet(
            '/register',    //get form regis v
            [
            'action'=>'creater',
            ]
        );
        $this->addPost(
            '/register',    //post form regis v
            [
            'action'=>'storer',
            ]
        );
        $this->addGet(
            '/login',   //get form login v
            [
            'action'=>'createl',
            ]
        );
        $this->addPost(
            '/login',   //post form login v
            [
            'action'=>'storel',
            ]
        );
        $this->addGet(
            '/logout',  //get logout v
            [
            'action'=>'destroy',
            ]
        );
    }
}