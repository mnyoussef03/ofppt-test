<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',

    ];
    public function getVoiture(){
        return $this->hasMany(Voiture::class,'marque_id','id');

    }
}
