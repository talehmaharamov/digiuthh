<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_episodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_section_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('title')->nullable();
            $table->string('image')->nullable();
            $table->longText('content')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('course_episodes');
    }
}
