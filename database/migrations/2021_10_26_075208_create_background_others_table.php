<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('background_others', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('type');
            $table->string('title');
            $table->text('body');
            $table->text('vidio');
            $table->string('image');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('subtitle');
            $table->string('subbody');
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
        Schema::dropIfExists('background_others');
    }
}
