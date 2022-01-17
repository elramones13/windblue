<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GestionMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Dudas Windblue Sports";
    public $dudas;

    public function __construct($dudas)
    {
        $this->duda = $dudas;
    }

    public function build()
    {
        return $this->view('dudas.correo');
    }
}