<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;
class Relationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //CITY
        Schema::create('cities', function($table){
            $table->id();
            $table->string('name');
            $table->string('code');

            $table->engine = 'InnoDB';

        });

        DB::table('cities')->insert([
            [
              'name' => 'Tipsyd',
              'code' => '',
            ],
            [
                'name' => 'warrend',
                'code' => '',
            ],
        ]);

        //STUDENT
        Schema::create('students', function($table){
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('city_id');
            $table->engine = 'InnoDB';

            $table->foreign('city_id')->references('id')->on('cities');
        });

        DB::table('students')->insert([
            [
                'first_name' => 'Tipsyderan',
                'last_name' => 'Raw',
                'city_id' => 1,
            ],
            [
                'first_name' => 'Tipsyderan2',
                'last_name' => 'War',
                'city_id' => 1,
            ],
        ]);

        //STUDENT CARD
        Schema::create('cards', function($table){
            $table->id();
            $table->string('code');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('student_id');
            $table->engine = 'InnoDB';

            $table->foreign('student_id')->references('id')->on('students');
        });

        DB::table('cards')->insert([
            [
                'student_id' => 1,
                'code' => '123456789',
                'status' => 1,
            ],
            [
                'student_id' => 2,
                'code' => '123456780',
                'status' => 0,
            ],
        ]);

        //SUBJECT
        Schema::create('subjects', function($table){
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->engine = 'InnoDB';

        });

        DB::table('subjects')->insert([
            [
                'name' => 'English',
                'code' => 'ENG',
            ],
            [
                'name' => 'Physics',
                'code' => 'PHY',
            ],
            [
                'name' => 'Chemistry',
                'code' => 'CHM',
            ],
        ]);

        //STUDENT SELECTION
        Schema::create('selections', function($table){
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');

            $table->engine = 'InnoDB';

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });

        DB::table('selections')->insert([
            [
                'student_id' => 1,
                'subject_id' => 1,
            ],
            [
                'student_id' => 1,
                'subject_id' => 3,
            ],
            [
                'student_id' => 2,
                'subject_id' => 2,
            ],
            [
                'student_id' => 2,
                'subject_id' => 3,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('cities');
        Schema::dropIfExists('students');
        Schema::dropIfExists('cards');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('selections');
    }
}
