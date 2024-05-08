<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('organizer')->nullable();
            $table->text('place')->nullable();
            $table->string('email')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('events');
    }
}
