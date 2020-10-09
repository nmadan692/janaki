<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abroad extends Model
{
    use SoftDeletes;
    protected $fillable = ['image','name','description','course_name','course_duration', 'intake', 'requirements'];

}
