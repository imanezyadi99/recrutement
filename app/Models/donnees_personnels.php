<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Espace_candidats;


class donnees_personnels extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['civilitee','name','prenom','adresse','ville','email','tel','cv'];

    public function infospersonnel()
    {
        return $this->hasOne(Espace_candidats::class,'donnees_personnels_id');
    }


}
