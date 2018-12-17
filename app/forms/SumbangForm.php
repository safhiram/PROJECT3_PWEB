<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\File;
use Phalcon\Forms\Element\Submit;

class SumbangForm extends Form
{
    public function initialize()
    {
        $nrp = new Text(
            'snrp',
            [
                'class'=>"input100",
                'placeholder'=>"Masukkan NRP",
            ]
        );
        $name = new Text(
            'sname',
            [
                'class' => "input100",
                'placeholder'=> "Masukkan Nama",
            ]
        );
        $email = new Email(
            'semail',
            [
                'class' => "input100",
                'placeholder'=> "Masukkan Email",
            ]
        );
        $nohp = new Text(
            'snohp',
            [
                'class' => "input100",
                'placeholder'=> "Masukkan Nomer HP",
            ]
        );
        $departemen = new Text(
            'sdepartemen',
            [
                'class' => "input100",
                'placeholder'=> "Masukkan Departemen",
            ]
        );
        $universitas = new Text(
            'suniversitas',
            [
                'class' => "input100",
                'placeholder'=> "Masukkan Universitas",
            ]
        );
        $judulbuku = new Text(
            'sjudulbuku',
            [
                'class' => "input100",
                'placeholder'=> "Masukkan Judul Buku",
            ]
        );
        $tebalhal = new Numeric(
            'stebalhalaman',
            [
                'class' => "input100",
                'placeholder'=> "Masukkan Tebal Halaman",
            ]
        );
        $deskripsibuku = new TextArea(
            'sdeskripsibuku',
            [
                'class' => "input100",
                'placeholder'=> "Deskripsi Buku ....",
            ]
        );
        $gambar = new File(
            'sgambar',
            [
                'class' => "input100",
            ]
        );
        $submit = new Submit(
            'ssubmit',
            [
                'class' => "contact100-form-btn",
                'value'   =>  'Submit',
            ]
        );

        $this->add($nrp);
        $this->add($name);
        $this->add($email);
        $this->add($nohp);
        $this->add($departemen);
        $this->add($universitas);
        $this->add($judulbuku);
        $this->add($tebalhal);
        $this->add($deskripsibuku);
        $this->add($gambar);
        $this->add($submit);
    }
}