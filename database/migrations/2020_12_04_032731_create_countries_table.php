<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;
class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $date = new DateTime();
        $unixTimestamp = $date->getTimestamp();

        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('code', 3);
            $table->string('name', 99);
            $table->string('dname', 99);
            $table->smallInteger('num_code');
            $table->mediumInteger('phone_code');

            $table->unsignedInteger('created');
            $table->unsignedInteger('register_by');
            $table->unsignedInteger('modified');
            $table->unsignedInteger('modified_by');
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });

        DB::table('countries')->insert([
            'code' => 'pk',
            'name' => 'Warren',
            'dname' => 'John',
            'num_code' => 0,
            'phone_code' => 912,
            'created' => $unixTimestamp,
            'register_by' => 1,
            'modified' => $unixTimestamp,
            'modified_by' => 1,
        ]);

        Schema::create('country_states', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->unsignedInteger('country_id');
            $table->string('name', 99);
            $table->string('code', 10);

            $table->unsignedInteger('created');
            $table->unsignedInteger('register_by');
            $table->unsignedInteger('modified');
            $table->unsignedInteger('modified_by');
            $table->boolean('record_deleted')->default(0);

            $table->foreign('country_id')->references('id')->on('countries');

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
        Schema::dropIfExists('countries');
    }
}
