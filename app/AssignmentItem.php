<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentItem extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
