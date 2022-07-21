<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssigmentItem extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
