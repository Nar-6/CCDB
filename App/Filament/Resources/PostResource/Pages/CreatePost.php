<?php
namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewPost;
use App\Models\Abonne;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    public function save()
    {
        parent::save();
        var_dump('etst');
        // Récupérer les données du nouveau post créé
        $newPostData = $this->record->toArray();
        // Envoi d'un e-mail à tous les abonnés
        $subscribers = Abonne::all();
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewPost($newPostData));
        }
    }
}
