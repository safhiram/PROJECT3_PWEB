<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Date;
use Phalcon\Forms\Element\Submit;

class ReservasiForm extends Form
{
    public function initialize()
    {
        $this->add(
            new Numeric(
                'id_reservasi',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Numeric(
                'buku_id',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Numeric(
                'user_id',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Numeric(
                'status',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'nomorhp',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Date(
                'tanggal_bertemu',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Submit(
                'submit',
                [
                    'class' => "btn btn-primary",
                    'value'   =>  'Submit',
                ]
            )
        );
    }
}