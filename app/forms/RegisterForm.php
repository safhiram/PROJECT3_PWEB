<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;

class RegisterForm extends Form
{
    public function initialize()
    {
        $this->add(
            new Text(
                'rname',
                [
                    'placeholder' => 'Raka',
                ]
            )
        );
        $this->add(
            new Text(
                'rnrp',
                [
                    'placeholder' => '05111740000120',
                ]
            )
        );
        $this->add(
            new Email(
                'remail',
                [
                    'placeholder'   =>  'ranggakusumad@gmail.com',
                ]
            )
        );
        $this->add(new Password('rpassword'));
        $this->add(new Password('rcpassword'));
        $this->add(
            new Submit(
                'rsubmit',
                [
                    'value'   =>  'Daftar',
                ]
            )
        );
    }
}