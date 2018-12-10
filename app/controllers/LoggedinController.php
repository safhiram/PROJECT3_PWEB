<?php

use Phalcon\Mvc\Controller;
use App\Forms\RegisterForm;
use Phalcon\Http\Response;

class LoggedinController extends Controller
{
    public function historyAction()
    {

    }
    public function catAction()
    {

    }
    public function editAction()
    {    
        $this->view->form= new RegisterForm();
        $sid = $this->session->get('auth')['s_id'];
        $eregis = Register::findFirst($sid);
        $this->view->setVars(
            [
                "nama" => $eregis->username,
                "nrp" => $eregis->nrp,
                "email" => $eregis->email,
            ]
        );
    }
    public function updateAction()
    {
        $cusername = $this->request->getPost('rname');
        $cnrp = $this->request->getPost('rnrp');
        $cemail = $this->request->getPost('remail');
        $cpassold = md5($this->request->getPost('rpasswordlama'));
        $cpass = md5($this->request->getPost('rpassword'));
        $ccpass = md5($this->request->getPost('rcpassword'));

        //if session check semua attr dan syntax password==cpassword sama, password lama =sama dengan password db
        $sid = $this->session->get('auth')['s_id'];
        $cupdate = Register::findFirst($sid);

        if ($cupdate) {
            $cupdate->username = $cusername;
            $cupdate->nrp = $cnrp;
            $cupdate->email = $cemail;
            $cupdate->password = $cpass;
        }

        if ($cupdate->save() === false) {
            echo "gagal";
            return;
            //kasih flash session lihat youtube
        }
        else {
            $this->response->redirect('user/profile'); //kasih flash session jika berhasil update
            $this->view->disable();
            return;
        }
    }
    public function profileAction()
    {
        $this->view->form= new RegisterForm();
        $sid = $this->session->get('auth')['s_id'];
        $pregis = Register::findFirst($sid);
        $this->view->setVars(
            [
                "nama" => $pregis->username,
                "nrp" => $pregis->nrp,
                "email" => $pregis->email,
            ]
        );
    }
    public function howAction(){}
    public function timeAction(){}
}