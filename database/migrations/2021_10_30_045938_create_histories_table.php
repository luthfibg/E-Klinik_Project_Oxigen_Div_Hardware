<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id('history_id');
            $table->float('temperature');
            $table->float('heart_rate');
            $table->float('tension');
            $table->string('desease_history');
            $table->string('medicine_history');
            $table->date('checkdate');
            $table->string('status_check');
            $table->string('description');
            // $table->string('room_id');
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
        Schema::dropIfExists('histories');
    }
}
