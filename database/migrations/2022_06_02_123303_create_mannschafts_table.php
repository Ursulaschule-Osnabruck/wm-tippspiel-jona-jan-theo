<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMannschaftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mannschafts', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Code');
            $table->string('Flagge');
            $table->Integer('Siege')->default(0);
            $table->Integer('Verluste')->default(0);
            $table->string('group');
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
        Schema::dropIfExists('mannschaft');
    }
}
