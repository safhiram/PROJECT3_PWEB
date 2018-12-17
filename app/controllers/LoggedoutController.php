<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Mvc\Url;

class LoggedoutController extends Controller
{
    public function catAction()
    {
        if($this->session->has('auth'))
        {
            $this->response->redirect('user/koleksi');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function howAction()
    {
        if($this->session->has('auth'))
        {
            $this->response->redirect('user/bagaimana');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function timeAction()
    {
        if($this->session->has('auth'))
        {
            $this->response->redirect('user/koleksi');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    //belum routing
    public function charityAction()
    {
        $this->view->url = new Url();
    }
    public function identityAction()
    {
        $this->view->url = new Url();
    }
    public function callAction(){}
}