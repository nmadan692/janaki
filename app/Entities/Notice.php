<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    use SoftDeletes;
    protected $fillable = ['notice', 'status'];
    public $appends = ['posted_date'];


    /**
     * @return string
     */
    public function getPostedDateAttribute() {
        return Carbon::parse($this->created_at)->format('Y-m-d');
    }
}
