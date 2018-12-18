<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Date;
use Phalcon\Forms\Element\Submit;

class ReservasiForm extends Form
{
    public function initialize()
    {
        $hp = new Text(
            'nohp',
            [
                'class' => "input100",
                'placeholder'=>"Masukkan No HP",
            ]
        );
        $tgl = new Date(
            'tanggal',
            [
                'class' => "input100",
                'placeholder'=>"Masukkan Tanggal Bertemu di Sekretariat HMTC",
            ]
        );
        $submit = new Submit(
            'submit',
            [
                'class' => "contact100-form-btn",
                'value'   =>  'Submit',
            ]
        );
        $this->add($hp);
        $this->add($tgl);
        $this->add($submit);
    }
}