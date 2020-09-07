<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('star', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('all');
            $table->string('all_desc');
            $table->integer('love');
            $table->string('love_desc');
            $table->integer('business');
            $table->string('business_desc');
            $table->integer('money');
            $table->string('money_desc');
            $table->date('day');
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
        Schema::dropIfExists('star');
    }
}
