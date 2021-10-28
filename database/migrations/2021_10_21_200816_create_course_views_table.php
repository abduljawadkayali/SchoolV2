<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_views', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('image');
            $table->string('title');
            $table->text('teacher');
            $table->text('body');
            $table->string('type');
            $table->string('price')->nullable();
            $table->integer('course_category_id')->unsigned();
            $table->foreign('course_category_id')->references('id')->on('course_categories');


            $table->softDeletes();
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
        Schema::dropIfExists('course_views');
    }
}
