<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoGestion extends Mailable
{
    use Queueable, SerializesModels;

    use Queueable, SerializesModels;

    public $subject = "Formulario de Windblue Sports";
    public $formulario;

    public function __construct($formulario)
    {
        $this->formulario = $formulario;
    }

    public function build()
    {
        return $this->view('dudas.correo');
    }
}
