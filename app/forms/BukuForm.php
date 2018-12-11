<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;

class BukuForm extends Form
{
    public function initialize()
    {
        $this->add(
            new Text(
                'rname',
                [
                    'class' => "form-control",
                    'value' => 'Raka',
                ]
            )
        );
        $this->add(
            new Text(
                'rnrp',
                [
                    'class' => "form-control",
                    'value' => '05111740000120',
                ]
            )
        );
        $this->add(
            new Email(
                'remail',
                [
                    'class' => "form-control",
                    'value'   =>  'ranggakusumad@gmail.com',
                ]
            )
        );
        $this->add(
            new Password(
                'rpasswordlama',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Password(
                'rpassword',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Password(
                'rcpassword',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Submit(
                'rsubmit',
                [
                    'class' => "btn btn-primary",
                    'value'   =>  'Edit',
                ]
            )
        );
    }
}