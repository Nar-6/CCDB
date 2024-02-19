<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Http\Controllers\PostController as FilamentPostController;
use App\Models\Video;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Summarizers\Count;
use Filament\Tables\Columns\TextColumn;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static $controller = FilamentPostController::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('photo')->acceptedFileTypes(['image/*'])->required(),
                TextInput::make('titre')->required(),
                TextInput::make('description')->required(),
                TextInput::make('deroulement')->required(),
                // FileUpload::make('images')->label('Images associées')->acceptedFileTypes(['image/*'])->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->circular()
                    ->square(),
                TextColumn::make('titre'),
                TextColumn::make('description'),
                TextColumn::make('deroulement')
                    ->size(10),
                ImageColumn::make('images.lien')
                    ->circular()
                    ->stacked()
                    ->label('images')
                    ->square()
                    ->limit(3)
                    ->limitedRemainingText(),
                // TextColumn::make('Nombre de vidéos')
                //     ->format(function ($value, $record) {
                //         $postId = $record->id; // Supposons que l'identifiant du poste soit stocké dans la colonne 'id'

                //         // Faire la requête pour compter le nombre de vidéos associées à ce poste
                //         $count = Video::where('post_id', $postId)->count();

                //         // Retourner le nombre de vidéos sous forme de texte
                //         return strval($count);
                //     })
                //     ->label('Nombre de vidéos'),

                   
                // ->imageUrl(function ($value, $record) {
                //     // Ici, vous devez retourner l'URL de l'image en fonction de $value et $record
                //     // $value représente la valeur de la colonne 'images' pour chaque enregistrement
                //     // $record est l'instance du modèle Post
                //     // Vous devez implémenter la logique pour retourner l'URL de l'image associée au post
                //     // Notez que cela dépend de la structure de vos données
                //     // Cette fonction doit retourner l'URL de l'image à afficher
                //     $value = $record->images();
                //     return $value->lien;
                // })
                // ->circular()
                // ->stack()
                // ->square(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
