<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;


class InscriptionsRecruteur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'email', 'password'];


    public function jobs()

   {

    return $this->hasMany(Job::class, 'recruteur_id');
    
    }
    
}
