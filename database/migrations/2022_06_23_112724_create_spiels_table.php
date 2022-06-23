<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spiels', function (Blueprint $table) {
            $table->id();

            // uhrzeit datum heimteam gastteam toreheim toregast ort
            $table->string('Uhrzeit');
            $table->string('Datum');
            $table->string('Geimteam');
            $table->string('Gastteam');
            $table->string('Heimpunkte');
            $table->string('Gastpunkte');
            $table->string('Ort');
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
        Schema::dropIfExists('spiels');
    }
}
