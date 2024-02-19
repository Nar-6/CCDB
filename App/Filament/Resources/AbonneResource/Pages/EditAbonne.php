<?php

namespace App\Filament\Resources\AbonneResource\Pages;

use App\Filament\Resources\AbonneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbonne extends EditRecord
{
    protected static string $resource = AbonneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
