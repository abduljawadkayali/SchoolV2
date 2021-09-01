<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_lessons', function (Blueprint $table) {
            $table->Increments('id');

            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects'); 
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('groups'); 
            $table->string('name');   
            $table->text('body');  
            $table->string('image'); 
            $table->string('ftitle')->nullable();  
            $table->text('ftext')->nullable();
            $table->string('stitle')->nullable();  
            $table->text('stext')->nullable();
            $table->string('fVtitle')->nullable();   
            $table->string('fVurl')->nullable();  
            $table->text('fVtext')->nullable();
            $table->string('thtitle')->nullable(); 
            $table->text('thtext')->nullable();
            $table->string('fourthtitle')->nullable(); 
            $table->text('fourthtext')->nullable();
            $table->string('fifthtitle')->nullable();   
            $table->text('fifthtext')->nullable();
            $table->string('sVtitle')->nullable();  
            $table->string('sVurl')->nullable(); 
            $table->text('sVtext')->nullable(); 
            $table->string('sixthtitle')->nullable();  
            $table->text('sixthtext')->nullable();
            $table->string('seventhtitle')->nullable();  
            $table->text('seventhtext')->nullable();
            $table->string('tVtitle')->nullable();  
            $table->string('tVurl')->nullable(); 
            $table->text('tVtext')->nullable(); 
            $table->string('fLtitle')->nullable(); 
            $table->string('fLurl')->nullable();   
            $table->string('sLtitle')->nullable(); 
            $table->string('sLurl')->nullable();
            $table->string('tLtitle')->nullable(); 
            $table->string('tLurl')->nullable();            
            $table->string('fourthLtitle')->nullable(); 
            $table->string('fourthLurl')->nullable();            
            $table->string('fifthLtitle')->nullable(); 
            $table->string('fifthLurl')->nullable();             
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
        Schema::dropIfExists('teacher_lessons');
    }
}
