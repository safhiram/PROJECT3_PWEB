<?php

use Phalcon\Mvc\Controller;
use App\Forms\RegisterForm;
use App\Forms\BukuForm;
use Phalcon\Http\Response;
use Phalcon\Mvc\Url;

class LoggedinController extends Controller
{
    public function showAction()
    {
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function historyAction()
    {
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function profileAction()
    {
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();

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
    public function editAction()
    {    
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();

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
    public function catAction()
    {
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('koleksi');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function timeAction($semester)
    {
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('koleksi');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
        $this->view->setVars(["sem"=>$semester]);
    }
    public function howAction()
    {
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('bagaimana');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function pesanAction($semester,$id)   //apa ini perlu? pikir kembali logika peminjaman
    {
        if(!$this->session->has('auth'))
        {
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
        $this->view->setVars(
            [
                "sem"=>$semester,
                "id_buku"=>$id,
            ]
        );
    }
    public function reservasiAction($semester,$id)  
    {
        $creservasi = new Reservasi();

        $sid = $this->session->get('auth')['s_id'];
        $cnomorhp = $this->request->getPost('nomorhp');
        $ctanggal_bertemu = $this->request->getPost('tanggal_bertemu');

        $creservasi->user_id=$sid;
        $creservasi->buku_id=$id;
        $creservasi->status = 0;
        $creservasi->nomorhp = $cnomorhp;
        $creservasi->tanggal_bertemu = $ctanggal_bertemu;
        
        if ($creservasi->save() === false) {
            echo "gagal";
            return;
        }
        else{
            $this->response->redirect('');
            $this->view->disable();
            return;
        }

    }
}