<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Obtener el servicio seleccionado
        $service = $this->data['service'];

        return $this
            ->to('jkimkj76@gmail.com')  // Aquí debes poner tu dirección de correo electrónico
            ->subject('¡Aviso de contacto! - Servicio: ' . $service) // Asunto con el servicio seleccionado
            ->view('emails.contact');
    }
}
