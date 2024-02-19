<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EcrireMail extends Mailable
{
    use Queueable, SerializesModels;

    // Déclarer une variable pour stocker les données de l'email
    public $email;

    /**
     * Create a new message instance.
     *
     * @param array $email Les données de l'email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        // Spécifier la vue à utiliser pour le contenu de l'email
        return $this->view('emails.ecrire_email_vue', ['email' => $this->email])
                    // Spécifier l'adresse email du destinataire et le sujet de l'email
                    ->from($this->email['email'], $this->email['prenom'] . ' ' . $this->email['nom'])
                    ->subject('Nouveau message de ' . $this->email['prenom'] . ' ' . $this->email['nom']);
    }
}
