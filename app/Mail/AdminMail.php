<?php

namespace App\Mail;

use App\DatosCliente;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cliente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DatosCliente $cliente)
    {
      $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email')
        ->subject('Nueva oferta aceptada');
    }
}
