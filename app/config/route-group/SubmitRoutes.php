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
            '/login',   //get form login
            [
            'action'=>'createl',
            ]
        );
        $this->addPost(
            '/login',   //post form login
            [
            'action'=>'storel',
            ]
        );
        $this->addGet(
            '/logout',  //get logout
            [
            'action'=>'destroy',
            ]
        );
    }
}