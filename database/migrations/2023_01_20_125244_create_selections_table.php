<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('selection_id');
            $table->decimal('odds')->nullable();
            $table->integer('event_id');
            $table->integer('event_number');
            $table->dateTime('event_time');
            $table->dateTime('finish_time');
            $table->string('event_type');
            $table->string('market');
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
        Schema::dropIfExists('selections');
    }
};
