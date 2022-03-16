<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('courses_id');
            $table->string('course_name');
            $table->string('test_name');
            $table->decimal('lowest_passing_grade',3,1)->default(5.5);
            $table->decimal('best_grade',3,1)->nullable();
            $table->date('passed_at')->nullable()->comment('date the grade was greater or equals to lowest_passing_grade');
            $table->timestamps();

            // $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
