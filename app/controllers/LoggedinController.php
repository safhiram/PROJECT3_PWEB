<?php

use Phalcon\Mvc\Controller;
use App\Forms\EditForm;

class LoggedinController extends Controller
{
    public function historyAction()
    {

    }
    public function catAction()
    {

    }
    public function editAction(){
        
        $this->view->form= new EditForm();

    }
    public function updateAction(){}
    public function profileAction(){}
    public function howAction(){}
    public function timeAction(){}
    public function bookAction(){}
}