<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'role',
        'photo',

    ];


    // Si les colonnes 'created_at' et 'updated_at' sont présentes dans la table
    public $timestamps = true;

    // Le nom de la table associée au modèle
    protected $table = 'membres'; // Assurez-vous de remplacer 'nom_de_la_table' par le nom réel de votre table

    /**
     * Constructeur de la classe.
     *
     * @param array $value
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        // Si vous souhaitez définir des valeurs par défaut pour certains attributs, vous pouvez le faire ici
        $this->attributes['nom'] = $attributes['nom'] ?? '';
        $this->attributes['prenom'] = $attributes['prenom'] ?? '';
        $this->attributes['role'] = $attributes['role'] ?? '';
        $this->attributes['photo'] = $attributes['photo'] ?? '';

    }

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

}
