<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('region');
            $table->string('location');
            $table->string('room');
            $table->string('guest');
            $table->string('price');
            $table->text('details');
            $table->mediumtext('thumbnail')->nullable();
            $table->mediumtext('image1')->nullable();
            $table->mediumtext('image2')->nullable();
            $table->mediumtext('image3')->nullable();
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
        Schema::dropIfExists('apartments');
    }
}
