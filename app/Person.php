<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'lastname',
        'firstname',
        'nickname',
        'gender',
        'image'
    ];

    public function assignment() {
        return $this->hasOne(Assignment::class,'person','id');
    }
}
