<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrestationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestation', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');

            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        Schema::create('prestation_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('icon');
            $table->string('description')->nullable();
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        Schema::create('prestation_items_modal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prestation_items_id');
            $table->string('img')->nullable();
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
        Schema::dropIfExists('prestation');
        Schema::dropIfExists('prestation_items');
        Schema::dropIfExists('prestation_items_modal');
    }
}
