<?php

namespace App\Models;
use App\Models\InscriptionsRecruteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['logo_entreprise','poste','nom_societe','description','responsabilite','exigence','salaire','nom','prenom','email','password','valide','is_running'];

    

public function recruteur()
{
    return $this->belongsTo(InscriptionsRecruteur::class, 'recruteur_id');
}


}
