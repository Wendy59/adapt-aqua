<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AboutTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->string('title');
            $table->string('img');

            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        Schema::create('about_items', function (Blueprint $table) {
            $table->string('title');
            $table->string('icon');
            $table->string('description')->nullable();
            
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
        Schema::dropIfExists('about');
        Schema::dropIfExists('about_items');
    }
}
