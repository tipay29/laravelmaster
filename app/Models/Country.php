<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;
//    public function insert(){
//
//        $date = new \DateTime();
//        $unixTimestamp = $date->getTimestamp();
//
//        DB::insert("insert into countries (code, name, dname, num_code, phone_code, created, register_by, modified, modified_by)
//                          values (?,?,?,?,?,?,?,?,?)",
//                           ['Ab', 'ab', 'ab', 0, 0, $unixTimestamp, 1, $unixTimestamp, 1 ]);
//
//    }
//
//    public function edit(){
//
//        DB::update("update countries set name = ? where id = ?", ['XYZ', 2]);
//
//    }
//
//    public function read(){
//        return DB::select('select * from countries');
//    }
//
//    public function delete(){
//        return DB::delete('delete from countries where id = ?' , [2]);
//    }

}
