<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function students(){
        return $this->belongsToMany('App\Models\Student',
            'selections','subject_id', 'student_id' );
    }
}
