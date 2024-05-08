<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->longText('question')->nullable();
            $table->longText('variant_a')->nullable();
            $table->longText('variant_b')->nullable();
            $table->longText('variant_c')->nullable();
            $table->longText('variant_d')->nullable();
            $table->longText('variant_e')->nullable();
            $table->enum('correct_variant', ['a', 'b', 'c', 'd', 'e']);
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
        Schema::dropIfExists('course_exams');
    }
}
