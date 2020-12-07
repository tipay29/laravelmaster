<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function students(){
        return $this->hasMany('App\Models\Student');
    }
}
