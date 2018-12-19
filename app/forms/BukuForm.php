<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\File;
use Phalcon\Forms\Element\Submit;

class BukuForm extends Form
{
    public function initialize()
    {
        $judul = new Text(
            'bjudul',
            [
                'class' => "form-control",
                'placeholder'=>"Masukkan Judul Buku",
            ]
        );
        $halaman = new Numeric(
            'bjumhal',
            [
                'class' => "form-control",
                'placeholder'=>"Masukkan Jumlah Halaman",
            ]
        );
        $desc = new TextArea(
            'bdeskbuk',
            [
                'class' => "form-control",
                'placeholder'=>"Masukkan Deskripsi",
            ]
        );
        $stat = new Numeric(
            'btersedia',
            [
                'class' => "form-control",
                'placeholder'=>" Masukkan Jumlah Buku"
            ]
        );
        $sem = new Numeric(
            'bsemester',
            [
                'class' => "form-control",
                'placeholder'=>" Masukkan Semester",
            ]
        );
        $gmb = new File(
            'bgambar',
            [
                'class' => "form-control",
            ]
        );
        $submit = new Submit(
            'bsubmit',
            [
                'class' => 'btn btn-primary submit',
                'value' => 'Tambahkan'
            ]
        );
        $this->add($judul);
        $this->add($halaman);
        $this->add($desc);
        $this->add($stat);
        $this->add($sem);
        $this->add($gmb);
        $this->add($submit);
    }
}