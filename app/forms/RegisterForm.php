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
                'maxlength' => 20,
                'class' => "form-control",
                'placeholder' => 'Username',
            ]
        );

        $name->addValidator(
            new PresenceOf(['message'=>'The name is required',])
        );
        
        $nrp = new Text(
            'rnrp',
            [
                'minlength'=>14,
                'maxlength'=> 14,
                'class' => "form-control",
                'placeholder' => '0511xxxxxxxxxx',
            ]
        );

        $nrp->addValidator(
            new PresenceOf(['message'=>'The NRP is required',])
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

        $passold->addValidator(
            New Regex(
                [
                        'pattern' => "/^[0-9a-zA-Z]/",
                        'message' => "Password minimal 8 karakter dengan kombinasi angka, huruf kecil dan huruf besar" ,
                ]
            )
        );

        $pass = new Password(
            'rpassword',
            [
                'class' => "form-control",
            ]
        );

        $pass->addValidator(
            New Regex(
                [
                        'pattern' => "/^[0-9a-zA-Z]/",
                        'message' => "Password minimal 8 karakter dengan kombinasi angka, huruf kecil dan huruf besar" ,
                ]
            )
        );

        $passconf = new Password(
            'rcpassword',
            [
                'class' => "form-control",
            ]
        );

        $passconf->addValidator(
            New Regex(
                [
                        'pattern' => "/^[0-9a-zA-Z]/",
                        'message' => "Password minimal 8 karakter dengan kombinasi angka, huruf kecil dan huruf besar" ,
                ]
            )
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
        /*$validator=new Validation();
        $validator->add(
            [
                "passold",
                "pass",
                "passconf",
            ],
            new RegexValidator(
                [
                    "pattern" => [
                        "passold" => "/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/",
                        "pass" => "/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/",
                        "passconf" => "/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/",
                        "name"=>"/^[a-z]$/",
                    ],
                    "message" => [
                        "passold" => "Password minimal 8 karakter dengan kombinasi angka, huruf kecil dan huruf besar",
                        "pass" => "Password minimal 8 karakter dengan kombinasi angka, huruf kecil dan huruf besar",
                        "passconf" => "Password minimal 8 karakter dengan kombinasi angka, huruf kecil dan huruf besar",
                    ]
                ]
            )
            );*/
        $this->add($name);
        $this->add($nrp);
        $this->add($email);
        $this->add($passold);
        $this->add($pass);
        $this->add($passconf);
        $this->add($submit);
    }
}