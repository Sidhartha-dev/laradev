<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    protected $guarded = [];

    protected $table = 'earnings';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}