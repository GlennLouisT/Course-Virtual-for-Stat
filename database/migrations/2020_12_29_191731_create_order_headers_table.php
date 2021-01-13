<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_headers', function (Blueprint $table) {
            $table->string('order_id',5);
            $table->string('mentor_id',5);
            $table->string('schedule_id',5);

            $table->foreign('order_id')
                    ->references('order_id')
                    ->on('orders')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('mentor_id')
                    ->references('mentor_id')
                    ->on('mentors')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('schedule_id')
                    ->references('schedule_id')
                    ->on('schedules')
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
        Schema::dropIfExists('order_headers');
    }
}
