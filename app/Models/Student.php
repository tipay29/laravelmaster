<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function card(){
        return $this->hasOne('App\Models\Card');
    }

    public function subjects(){
        return $this->belongsToMany('App\Models\Subject',
        'selections', 'student_id', 'subject_id');
    }
}
