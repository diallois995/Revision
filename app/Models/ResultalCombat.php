<?php

namespace App\Models;

use App\Models\ResultalCombat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ResultalCombat extends Model
{
    use HasFactory;

     // public $fillable = ['nom', 'prenom', 'matricule', 'age'];

   //Deuxieme methode
   protected $guarded =  [];
}
