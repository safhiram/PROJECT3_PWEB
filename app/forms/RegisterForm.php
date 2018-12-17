<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Regex;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;

class RegisterForm extends Form
{
    public function initialize()
    {
        $name = new Text(
            'rname',
            [
                'class' => "form-control",
                'placeholder' => 'Raka',
            ]
        );
        $nrp = new Text(
            'rnrp',
            [
                'class' => "form-control",
                'placeholder' => '05111740000120',
            ]
        );
        $email = new Email(
            'remail',
            [
                'class' => "form-control",
                'placeholder'   =>  'ranggakusumad@gmail.com',
            ]
        );
        $passold = new Password(
            'rpasswordlama',
            [
                'class' => "form-control",
            ]
        );
        $pass = new Password(
            'rpassword',
            [
                'class' => "form-control",
            ]
        );
        $passconf = new Password(
            'rcpassword',
            [
                'class' => "form-control",
            ]
        );
        $submit = new Submit(
            'rsubmit',
            [
                'class' => "btn btn-primary",
                'value'   =>  'Daftar',
            ]
        );
        // here i left of
        // $cvalid = new Validation();
        $name->addValidator(
            new PresenceOf(
                [
                    'message' => 'Nama username diisi!',
                ]
            )
        );
        $name->addValidator(
            new StringLength(
                [
                    'min' => 3,
                    'messageMinimum' => 'Nama terlalu pendek!',
                ]
            )
        );
        $this->add($name);
        $this->add($nrp);
        $this->add($email);
        $this->add($passold);
        $this->add($pass);
        $this->add($passconf);
    }
}