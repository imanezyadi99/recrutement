<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\donnees_personnels;


class Espace_candidats extends Model
{
    use HasFactory;

    public function donneespersonnels(){
        
        return $this->belongsTo(donnees_personnels::class);
    }
}
