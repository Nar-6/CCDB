<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageResource\Pages;
use App\Filament\Resources\ImageResource\RelationManagers;
use App\Models\Image;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use App\Http\Controllers\ImageController as FilamentImageController;
use App\Models\Post;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImageResource extends Resource
{
    protected static ?string $model = Image::class;

    protected static $controller = FilamentImageController::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('postId')
                ->label('Post')
                ->options(Post::pluck('titre', 'id')->toArray()) // Récupérer tous les titres de post en tant qu'options pour la liste déroulante
                ->required(),
            FileUpload::make('lien')->acceptedFileTypes(['image/*'])->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        
        return $table
        ->columns([
            TextColumn::make('postId'),
            TextColumn::make('post.titre')
                ->label('Post Name'),
            ImageColumn::make('lien')
                ->circular()
                ->square(),
            
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
            'index' => Pages\ListImages::route('/'),
            'create' => Pages\CreateImage::route('/create'),
            'edit' => Pages\EditImage::route('/{record}/edit'),
        ];
    }
    public function getPostName($record)
    {
        // Vérifiez si l'enregistrement a un post associé
        if ($record->post) {
            return $record->post->titre;
        } else {
            return null; // ou une valeur par défaut si aucun post associé n'est trouvé
        }
    }
}
