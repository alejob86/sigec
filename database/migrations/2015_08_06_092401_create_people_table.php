<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->string('dni', 20);
            $table->date('birth_date');
            $table->string('street_name', 100);
            $table->string('street_number', 100);
            $table->string('floor', 5);
            $table->string('department', 5);
            $table->string('neightborhood', 5);
            $table->string('country', 100);
            $table->string('province', 100);
            $table->string('locality', 100);
            $table->string('postal_code', 100);
            $table->string('cell_phone', 100);
            $table->string('phone', 100);
            $table->string('phone_at_work', 100);
            $table->string('email', 150);
            $table->string('facebook', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('people');
    }
}
