<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tank', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('temperature', 5, 2);
            $table->float('ph', 5, 2);
            $table->double('flujo', 5, 4);
            $table->float('salinidad', 5, 2);
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
        Schema::dropIfExists('table_tank');
    }
}
