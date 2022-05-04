<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    use HasFactory;

    protected $fillable=['dateAction','titre','adresseAction','contenu','image',"idActivites"];

    public function Activites(){
        return $this->belongsTo(Activites::class);
    }

}

