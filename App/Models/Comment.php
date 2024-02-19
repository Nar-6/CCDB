<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    
    protected $fillable = ['contenu','postId'];

    // Si les colonnes 'created_at' et 'updated_at' sont présentes dans la table
    public $timestamps = true;

    // Le nom de la table associée au modèle
    protected $table = 'comments'; // Assurez-vous de remplacer 'nom_de_la_table' par le nom réel de votre table

    /**
     * Constructeur de la classe.
     *
     * @param array $value
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        // Si vous souhaitez définir des valeurs par défaut pour certains attributs, vous pouvez le faire ici
        $this->attributes['contenu'] = $attributes['contenu'] ?? '';
        $this->attributes['postId'] = $attributes['postId'] ?? '';
        
    }
    public function post()
    {
        return $this->belongsTo(Post::class, 'postId');
    }
}
