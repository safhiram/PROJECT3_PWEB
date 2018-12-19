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
                'placeholder' => 'Username',
            ]
        );
        $nrp = new Text(
            'rnrp',
            [
                'class' => "form-control",
                'placeholder' => '0511xxxxxxxxxx',
            ]
        );
        $email = new Email(
            'remail',
            [
                'class' => "form-control",
                'placeholder'   =>  'example@mail.com',
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
        // $name->addValidator(
        //     new PresenceOf(
        //         [
        //             'message' => 'Nama username diisi!',
        //         ]
        //     )
        // );
        // $name->addValidator(
        //     new StringLength(
        //         [
        //             'min' => 3,
        //             'messageMinimum' => 'Nama terlalu pendek!',
        //         ]
        //     )
        // );
        $this->add($name);
        $this->add($nrp);
        $this->add($email);
        $this->add($passold);
        $this->add($pass);
        $this->add($passconf);
        $this->add($submit);
    }
}