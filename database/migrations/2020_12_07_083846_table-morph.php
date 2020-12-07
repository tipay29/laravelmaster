<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMorph extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //IMAGE
        Schema::create('images', function($table){
            $table->id();
            $table->string('path');
            $table->morphs('imageable');

            $table->engine = 'InnoDB';

        });

        //ADDRESS
        Schema::create('addresses', function($table){
            $table->id();
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('address_line_3');
            $table->morphs('addressable');

            $table->engine = 'InnoDB';

        });

        //CONTACT
        Schema::create('contacts', function($table){
            $table->id();
            $table->string('phone_num');
            $table->morphs('contactable');

            $table->engine = 'InnoDB';

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
