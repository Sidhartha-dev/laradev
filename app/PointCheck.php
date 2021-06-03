<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointCheck extends Model
{
    protected $guarded = [];

    protected $table = 'point_checks';

    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function point()
    {
        return $this->hasOne('App\Point');
    }
}
