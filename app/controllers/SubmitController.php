<?php

use App\Forms\RegisterForm;
use Phalcon\Mvc\Controller;

class SubmitController extends Controller
{
    public function createrAction()
    {
        // var_dump( new RegisterForm() );
        $this->view->form = new RegisterForm();
    }
    public function storerAction()
    {
        
    }
    public function createlAction(){}
    public function storelAction()
    {
        
    }
    public function destroyAction()
    {
        
    }
}