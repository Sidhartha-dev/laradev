<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $guarded = [];

    protected $table = 'points';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pointcheck()
    {
        return $this->hasOne('App\PointCheck');
    }
}
