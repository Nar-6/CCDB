<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    
    protected $fillable = ['lien','postId'];

    // Si les colonnes 'created_at' et 'updated_at' sont présentes dans la table
    public $timestamps = true;

    // Le nom de la table associée au modèle
    protected $table = 'videos'; // Assurez-vous de remplacer 'nom_de_la_table' par le nom réel de votre table

    /**
     * Constructeur de la classe.
     *
     * @param array $value
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        // Si vous souhaitez définir des valeurs par défaut pour certains attributs, vous pouvez le faire ici
        $this->attributes['lien'] = $attributes['lien'] ?? '';
        $this->attributes['postId'] = $attributes['postId'] ?? '';
        
    }
    public function updateLien($lien)
    {
        $this->update(['lien' => $lien]);
    }

   
    
    public function getLienAttribute($value)
    {
        // var_dump($value);
        // dd($value);
            //je veux afficher le contenue de $value ici

        // Si la valeur est un tableau (informations sur le fichier), retournez le chemin du fichier
        if (is_array($value) && isset($value['path'])) {
            return asset('images/' . $value['path']);
        }

        // Si c'est déjà une chaîne, retournez-la directement
        return asset('/images/'.$value);
    }
   
    public function post()
    {
        return $this->belongsTo(Post::class, 'postId');
    }
}
