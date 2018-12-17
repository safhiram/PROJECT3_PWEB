<?php

use App\Forms\SumbangForm;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Http\Request\File;
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
    public function timeAction($semester)
    {
        if($this->session->has('auth'))
        {
            $this->response->redirect('user/koleksi');
            $this->view->disable();
            return;
        }
        $this->view->url = new Url();
        $this->view->setVars(["sem"=>$semester]);
    }
    //belum routing
    public function charityAction()
    {
        $this->view->url = new Url();
        $this->view->form = new SumbangForm();
    }
    public function callAction()
    {
        $csumbang = new Sumbang();

        $cnrp = $this->request->getPost('snrp');
        $cnama = $this->request->getPost('sname');
        $cemail = $this->request->getPost('semail');
        $cnohp = $this->request->getPost('snohp');
        $cdepart = $this->request->getPost('sdepartemen');
        $cuniv = $this->request->getPost('suniversitas');
        $cjudul = $this->request->getPost('sjudulbuku');
        $ctebal = $this->request->getPost('stebalhalaman');
        $cdesk = $this->request->getPost('sdeskripsibuku');
        $cgambar = $this->request->getUploadedFiles();

        $filepath = 'buku-sumbang/'.$cjudul;
        foreach ($cgambar as $cg) {
            $cg->moveTo($filepath);
        }

        $csumbang->nrp = $cnrp;
        $csumbang->nama = $cnama;
        $csumbang->email = $cemail;
        $csumbang->no_hp = $cnohp;
        $csumbang->departemen = $cdepart;
        $csumbang->universitas = $cuniv;
        $csumbang->judul_bukusumbang = $cjudul;
        $csumbang->jumlah_halamansumbang = $ctebal;
        $csumbang->deskripsi_bukusumbang = $cdesk;
        $csumbang->status = 0;
        $csumbang->semester = 0;
        $csumbang->gambarsumbang = $filepath;
        //masih gagal gatau kenapa
        if ($csumbang->save() === false) {
            echo $filepath;
            var_dump($cgambar);
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