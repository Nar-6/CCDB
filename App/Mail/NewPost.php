<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;

    // Déclarer une variable pour stocker les données de publication
    public $post;

    /**
     * Create a new message instance.
     *
     * @param mixed $post Les données de la publication
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Spécifier la vue à utiliser pour le contenu du mail
        return $this->view('emails.new_post', ['post' => $this->post])
                    ->from('ccdbassila@gmail.com', 'Conseil Culturel de la Diaspora Bassiloise')
                    
                    // Spécifier le sujet du mail
                    ->subject('Nouveau post publié');
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'New Post',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.new_post',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
