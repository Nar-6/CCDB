<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    // public function formImage(Form $form)
    // {
    //     return $form
    //         ->schema([
    //             // autres champs de formulaire

    //         ]);
    // }
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
