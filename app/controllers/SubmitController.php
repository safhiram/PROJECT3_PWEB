<?php

use App\Forms\RegisterForm;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class SubmitController extends Controller
{
    public function createrAction()
    {
        // var_dump( new RegisterForm() );
        $this->view->form = new RegisterForm();
    }
    public function storerAction()
    {
        $cregis = new Register();

        $cusername = $this->request->getPost('rname');
        $cnrp = $this->request->getPost('rnrp');
        $cemail = $this->request->getPost('remail');
        $cpass = md5($this->request->getPost('rpassword'));
        $ccpass = md5($this->request->getPost('rcpassword'));

        $cregis->username = $cusername;
        $cregis->nrp = $cnrp;
        $cregis->email = $cemail;
        $cregis->password = $cpass;
        $cregis->role = "user";

        //if session check semua attr dan syntax password==cpassword sama

        if ($cregis->save() === false) {
            echo "gagal";
            //kasih flash session lihat youtube
        }
        else {
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
    }
    public function createlAction(){}
    public function storelAction()
    {
        
    }
    public function destroyAction()
    {
        
    }
}