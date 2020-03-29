<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biographie extends Model
{
    protected $fillable = [ 'description', 'idMembre' ];

    public function member()
    {
        return $this->belongsTo('App\Membre', 'idMembre');
    }
}
