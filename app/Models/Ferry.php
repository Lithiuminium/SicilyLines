<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ferry extends Model
{
    protected $fillable =['NOM', 'LONGUEUR', 'LARGEUR', 'VITESSE'];

        public function equipements():BelongsToMany{
            return $this->belongsToMany(Equipement::class);
        }
}
