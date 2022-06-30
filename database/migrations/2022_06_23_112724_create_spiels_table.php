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
            $table->string('heim_id');
            $table->string('gast_id');
            $table->string('group');
            $table->string('tore_heim');
            $table->string('tore_gast');
            $table->date('spielzeit');
            $table->string('spielort');
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
