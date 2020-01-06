<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['Name', 'Phone', 'email', 'images'];

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
