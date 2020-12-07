<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function students(){
        return $this->belongsToMany('App\Models\Student');
    }

    public function subjects(){
        return $this->belongsToMany('App\Models\Subject');
    }
}
