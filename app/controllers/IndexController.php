<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Mvc\Url;

class IndexController extends Controller
{
    public function show404Action()
    {
        $this->view->url = new Url();
    }
    public function showAction()
    {
        if($this->session->has('auth'))
        {
            $this->response->redirect('user');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
}