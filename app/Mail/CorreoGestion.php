<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoGestion extends Mailable
{
    use Queueable, SerializesModels;

<<<<<<< HEAD
    use Queueable, SerializesModels;

=======
>>>>>>> c2d7c20b8cf17c65d20da26ff7809db44be2c1c9
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
