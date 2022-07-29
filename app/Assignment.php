<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'person',
        'assignment'
    ];

    public function item() {
        return $this->hasOne(AssignmentItem::class,'id','assignment');
    }
}
