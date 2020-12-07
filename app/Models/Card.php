<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    public function student(){
        return $this->hasOne('App\Models\Student');
    }
}
