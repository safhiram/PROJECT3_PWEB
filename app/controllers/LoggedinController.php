<?php

use Phalcon\Mvc\Controller;
use App\Forms\RegisterForm;
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
    public function registerAction()
    {
        if($this->session->has('auth'))
        {
            $role = $this->session->get('auth')['s_role'];
            if ($role != 'admin' ) {
                $this->response->redirect('home');
                $this->view->disable();
                return;    
            } 
        }else{
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function sumbangAction()
    {
        if($this->session->has('auth'))
        {
            $role = $this->session->get('auth')['s_role'];
            if ($role != 'admin' ) {
                $this->response->redirect('home');
                $this->view->disable();
                return;    
            } 
        }else{
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function reservasiAction()
    {
        if($this->session->has('auth'))
        {
            $role = $this->session->get('auth')['s_role'];
            if ($role != 'admin' ) {
                $this->response->redirect('home');
                $this->view->disable();
                return;    
            } 
        }else{
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function previewAction()
    {
        if($this->session->has('auth'))
        {
            $role = $this->session->get('auth')['s_role'];
            if ($role != 'admin' ) {
                $this->response->redirect('home');
                $this->view->disable();
                return;    
            } 
        }else{
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function bookAction()
    {
        if($this->session->has('auth'))
        {
            $role = $this->session->get('auth')['s_role'];
            if ($role != 'admin' ) {
                $this->response->redirect('home');
                $this->view->disable();
                return;    
            } 
        }else{
            $this->response->redirect('login');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
    }
    public function regisAction()
    {
        
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

        $this->view->form = new RegisterForm();
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
        $book = Buku::find("semester='$semester'");
        $this->view->setVars(
            [
                "sem"=>$semester,
                'buku'=>$book,
            ]
        );
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
}