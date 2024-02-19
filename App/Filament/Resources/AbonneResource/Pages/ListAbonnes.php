<?php

namespace App\Filament\Resources\AbonneResource\Pages;

use App\Filament\Resources\AbonneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbonnes extends ListRecords
{
    protected static string $resource = AbonneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
