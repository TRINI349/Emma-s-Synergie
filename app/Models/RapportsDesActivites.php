<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportsDesActivites extends Model
{
    use HasFactory;
    protected $fillable=['Annee','lienFichier'];
}