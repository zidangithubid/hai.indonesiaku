<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('picture');
            $table->date('date');
            $table->char('province_id');
            $table->foreign('province_id')->references('id')->on('indonesia_provinces')->onDelete('cascade');
            $table->char('city_id');
            $table->foreign('city_id')->references('id')->on('indonesia_cities')->onDelete('cascade');
            $table->char('district_id');
            $table->foreign('district_id')->references('id')->on('indonesia_districts')->onDelete('cascade');
            $table->char('village_id');
            $table->foreign('village_id')->references('id')->on('indonesia_villages')->onDelete('cascade');
            $table->longText('description');
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
        Schema::dropIfExists('festivals');
    }
}
