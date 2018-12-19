<?php

use Phalcon\Mvc\Model\Manager;
use Phalcon\Mvc\Controller;
use App\Forms\RegisterForm;
use App\Forms\ReservasiForm;
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
        $reg = Register::find();
        $this->view->setVars(['res'=>$reg]);
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
        $sum = Sumbang::find();
        $this->view->setVars(['cha'=>$sum]);
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
        $reserv = Reservasi::find();
        $this->view->setVars(['res'=>$reserv]);
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

        $bukus = Buku::find();
        $this->view->setVars(['buku'=>$bukus]);
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
        //postnya buku
    }
    public function chatAction()
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
        $sid = $this->session->get('auth')['s_id'];
        $query = $this->modelsManager->createQuery(
            'SELECT Buku.judul_buku, Reservasi.tanggal_bertemu, Reservasi.tanggal_kembali, Reservasi.status, Reservasi.buku_id
            FROM Reservasi JOIN Buku ON (Reservasi.buku_id=Buku.id_buku)
            WHERE Reservasi.user_id="'.$sid.'" AND (Reservasi.status=1 OR Reservasi.status=3 OR Reservasi.status=4)
            ORDER BY Reservasi.buku_id, Reservasi.tanggal_kembali, Reservasi.status'
        );
        //output hanya 
        //0=sdng dipesan u pinjam, 1=sdng pinjam, 2=cancel pinjam, 3=akan kembali, 4=tlh kembali
        $res = $query->execute();
        // var_dump($res);
        $this->view->setVars(["que"=>$res]);
    }
    public function kembaliAction($id)
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
                "id_buku"=>$id,
            ]
        );
        $this->view->form= new ReservasiForm();
    }
    public function returnedAction($id)
    {
        $cnohp = $this->request->getPost('nohp');
        $ctgl = $this->request->getPost('tanggal');
        $user = $this->session->get('auth')['s_id'];
        //0=sdng dipesan u pinjam, 1=sdng pinjam, 2=cancel pinjam, 3=akan kembali, 4=tlh kembali
        $query = $this->modelsManager->createQuery(
            'UPDATE Reservasi SET Reservasi.status=3, Reservasi.tanggal_bertemu="'.$ctgl.'", Reservasi.nomorhp="'.$cnohp.'"
            WHERE Reservasi.buku_id="'.$id.'" AND Reservasi.status=1 AND Reservasi.user_id="'.$user.'"'
        );
        $res = $query->execute();

        if (!$res){
            var_dump($res);
            echo 'gagal';
            return;
        }
        else{
            $this->response->redirect('user');
            $this->view->disable();
            return;
        }
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
        $query = $this->modelsManager->createQuery(
            'SELECT Buku.id_buku, COUNT(*) as n FROM Buku JOIN Reservasi
            ON (Reservasi.buku_id=Buku.id_buku) WHERE Buku.semester="'.$semester.'"
            AND (Reservasi.status=0 OR Reservasi.status=1) GROUP BY Buku.id_buku'
        );
        //0=sdng dipesan u pinjam, 1=sdng pinjam, 2=cancel pinjam, 3=akan kembali, 4=tlh kembali
        $res = $query->execute();
        $this->view->setVars(
            [
                "sem"=>$semester,
                'buku'=>$book,
                'que'=>$res,
                'jumlah'=>0,
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
        $this->view->form= new ReservasiForm();
    }
    public function pinjamAction($semester,$id)   //apa ini perlu? pikir kembali logika peminjaman
    {
        $cpinjam = new Reservasi();

        $cnohp = $this->request->getPost('nohp');
        $ctgl = $this->request->getPost('tanggal');

        $cpinjam->buku_id = $id;
        $user = $this->session->get('auth')['s_id'];
        $cpinjam->user_id = $user;
        $cpinjam->status = 0;
        $cpinjam->nomorhp = $cnohp;
        $cpinjam->tanggal_bertemu = $ctgl;
        $ctgl = date('Y-m-d', strtotime($ctgl. ' + 7 months'));
        $cpinjam->tanggal_kembali = $ctgl;

        if ($cpinjam->save() === false){
            var_dump($cpinjam);
            echo 'gagal';
            return;
        }
        else{
            $this->response->redirect('user/koleksi/semester/'.$semester.'/'.$id);
            $this->view->disable();
            return;
        }
    }
}