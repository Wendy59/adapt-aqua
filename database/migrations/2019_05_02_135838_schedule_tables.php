<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScheduleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        
        
        Schema::create('schedule_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('color');
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
                
        Schema::create('schedule_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_categories_id');
            $table->datetime('start');
            $table->datetime('end');
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
        Schema::dropIfExists('schedule_categories');
        Schema::dropIfExists('schedule_items');
    }
}
