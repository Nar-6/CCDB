<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembreResource\Pages;
use App\Filament\Resources\MembreResource\RelationManagers;
use App\Models\Membre;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MembreResource extends Resource
{
    protected static ?string $model = Membre::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('photo')->acceptedFileTypes(['image/*'])->required(),
                TextInput::make('nom')->required(),
                TextInput::make('prenom')->required(),
                TextInput::make('role')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                ->circular()
                ->square(),
                TextColumn::make('nom'),
                TextColumn::make('prenom'),
                TextColumn::make('role'),  
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembres::route('/'),
            'create' => Pages\CreateMembre::route('/create'),
            'edit' => Pages\EditMembre::route('/{record}/edit'),
        ];
    }
}
