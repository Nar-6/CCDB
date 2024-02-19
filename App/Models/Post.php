<?php

namespace App\Models;


use Hamcrest\Core\HasToString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['photo', 'titre', 'description', 'deroulement'];

    // Si les colonnes 'created_at' et 'updated_at' sont présentes dans la table
    public $timestamps = true;

    // Le nom de la table associée au modèle
    protected $table = 'post'; // Assurez-vous de remplacer 'nom_de_la_table' par le nom réel de votre table

    /**
     * Constructeur de la classe.
     *
     * @param array $value
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        // Si vous souhaitez définir des valeurs par défaut pour certains attributs, vous pouvez le faire ici
        $this->attributes['titre'] = $attributes['titre'] ?? '';
        $this->attributes['description'] = $attributes['description'] ?? '';
        $this->attributes['photo'] = $attributes['photo'] ?? '';
        $this->attributes['deroulement'] = $attributes['deroulement'] ?? '';

        

    }
    
    //  public function __construct( array $value)
    //  {
    //     dd($value);
    //      $this->photo = $value['photo'];
    //      $this->titre = $value['titre'];
    //      $this->description = $value['description'];
    //  }
    
    public function updatePhoto($photo)
    {
        $this->update(['photo' => $photo]);
    }
    
    public function getPhotoAttribute($value)
    {

            //je veux afficher le contenue de $value ici
        //  dd($value);

        // Si la valeur est un tableau (informations sur le fichier), retournez le chemin du fichier
        if (is_array($value) && isset($value['path'])) {
            return asset('images/' . $value['path']);
        }

        // Si c'est déjà une chaîne, retournez-la directement
        return asset('/images/'.$value);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'postId');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'postId');
    }
    

    public function videos()
    {
        return $this->hasMany(Video::class, 'postId');
    }
    public function countVideo() : string {
        $nbre = $this->videos()->count();
        return strval($nbre);
    }

}
