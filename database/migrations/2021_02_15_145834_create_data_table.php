<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('dimension')->nullable();
            $table->string('colada')->nullable();
            $table->double('masa_lineal', 8, 3)->nullable();
            $table->double('fy_mpa', 8, 3)->nullable();
            $table->double('fs_mpa', 8, 3)->nullable();
            $table->integer('fs_fy')->nullable();
            $table->double('alargamiento', 8, 3)->nullable();
            $table->string('doblado')->nullable();
            $table->double('alturanerv_mm', 8, 3)->nullable();
            $table->integer('espacnerv_m')->nullable();
            $table->integer('angNerv_mm')->nullable();
            $table->integer('gap')->nullable();
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
        Schema::dropIfExists('data');
    }
}
