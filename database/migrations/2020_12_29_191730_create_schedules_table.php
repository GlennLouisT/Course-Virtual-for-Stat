<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->string('schedule_id',5);
            $table->string('topic_id',5);
            $table->string('session_id',5);

            $table->primary('schedule_id');
            $table->foreign('topic_id')
                    ->references('topic_id')
                    ->on('topics')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('session_id')
                    ->references('session_id')
                    ->on('sessions')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
