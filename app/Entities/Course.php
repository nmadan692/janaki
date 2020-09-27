<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $fillable = ['name',
                           'description',
                           'image',
                           'apply_process',
                           'certification',
                           'start_date',
                           'duration',
                           'class_duration',
                           'seats',
                           'fee',
                           'skill_level',
                           'deadline',
                           'status'];
}
