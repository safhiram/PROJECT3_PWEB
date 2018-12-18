<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Submit;

class BukuForm extends Form
{
    public function initialize()
    {
        $judul = new Text(
            'judul',
            [
                'class' => "form-control",
            ]
        );
        $halaman = new Numeric(
            'jumhal',
            [
                'class' => "form-control",
                'value'   =>  'ranggakusumad@gmail.com',
            ]
        );
        $desc = new Text(
            'deskbuk',
            [
                'class' => "form-control",
            ]
        );
        
        $stat = new Numeric(
            'tersedia',
            [
                'class' => "form-control",
            ]
        );
        $sem = new Numeric(
            'semester',
            [
                'class' => "form-control",
            ]
        );
        $gmb = new Text(
            'gambar',
            [
                'class' => "form-control",
            ]
        );
        $submit = new Submit(
            'bsubmit',
            [
                'class' => 'form-control',
            ]
        );

    }
}