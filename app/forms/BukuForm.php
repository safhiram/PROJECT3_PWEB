<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;

class BukuForm extends Form
{
    public function initialize()
    {
        $this->add(
            new Numeric(
                'id',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'judul_buku',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Numeric(
                'jumlah_halaman',
                [
                    'class' => "form-control",
                    'value'   =>  'ranggakusumad@gmail.com',
                ]
            )
        );
        $this->add(
            new Text(
                'deskripsi_buku',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Numeric(
                'tersedia',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Numeric(
                'semester',
                [
                    'class' => "form-control",
                ]
            )
        );
        $this->add(
            new Text(
                'gambar',
                [
                    'class' => "form-control",
                ]
            )
        );
    }
}