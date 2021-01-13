<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->string('forum_id',5);
            $table->string('user_id',5);
            $table->string('mentor_id',5);


            $table->foreign('forum_id')
                    ->references('forum_id')
                    ->on('forums')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('user_id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('mentor_id')
                    ->references('mentor_id')
                    ->on('mentors')
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
        Schema::dropIfExists('threads');
    }
}
