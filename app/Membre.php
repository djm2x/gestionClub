<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $fillable = [ 'nom', 'prenom', 'adresse', 'idUser' ];

    public function user()
    {
        return $this->belongsTo('App\User', 'idUser');
    }
}
