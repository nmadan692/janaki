<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;
    protected $fillable = ['name',
        'subject',
        'image',
        'facebook',
        'instagram',
        'linkedin',
        'twitter',

    ];
}
