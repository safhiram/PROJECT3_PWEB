<?php

use App\Forms\RegisterForm;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Mvc\Url;

class SubmitController extends Controller
{
    public function createrAction()
    {
        // var_dump( new RegisterForm() );
        if($this->cookies->has('auth'))
        {
            $this->response->redirect('home');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
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

        //if session check semua attr dan syntax password==cpassword sama

        $cregis->username = $cusername;
        $cregis->nrp = $cnrp;
        $cregis->email = $cemail;
        $cregis->password = $cpass;
        $cregis->role = "user";

        if ($cregis->save() === false) {
            echo "gagal";
            return;
            //kasih flash session lihat youtube
        }
        else {
            $this->response->redirect('login'); //kasih flash session jika berhasil daftar
            $this->view->disable();
            return;
        }
    }
    public function createlAction()
    {
        // var_dump( new RegisterForm() );
        if($this->cookies->has('auth'))
        {
            $this->response->redirect('home');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
        $this->view->form = new RegisterForm();
    }
    public function storelAction()
    {
        $cemail = $this->request->getPost('remail');
        $cpass = md5($this->request->getPost('rpassword'));

        $clogin = Register::findFirst("email='$cemail'");
        if ($clogin) {
            if ($cpass === $clogin->password) {
                $this->cookies->set(
                    'auth',
                    [
                        's_id' => $clogin->id,
                        's_name' => $clogin->username,
                    ],
                    time() + 6 * 3600
                );
                $this->response->redirect('home');
                $this->view->disable();
                return;
            }
        }else{
            //flash session kalo salah lihat yt
            return;
        }
    }
    public function destroyAction()
    {
        if(!$this->cookies->has('auth'))
        {
            $this->response->redirect();
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
        $this->cookies->destroy();
    }
}