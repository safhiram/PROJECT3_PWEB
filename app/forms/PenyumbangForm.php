<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\File;
use Phalcon\Forms\Element\Submit;

class PenyumbangForm extends Form
{
    public function initialize()
    {
        $this->add(
            new Text(
                'nrp',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'name',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Email(
                'email',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'nohp',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'departemen',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'universitas',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'judulbuku',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Numeric(
                'tebalhalaman',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'deskripsibuku',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new File(
                'gambar',
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