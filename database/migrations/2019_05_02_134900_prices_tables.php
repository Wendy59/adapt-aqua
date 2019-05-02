<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PricesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->string('title1');
            $table->string('title2');

            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        //WITH SUBSCRIPTION
        Schema::create('prices_subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->decimal('single_price', 10, 2);
            $table->decimal('duo_price', 10, 2);
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        Schema::create('prices_subscription_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prices_subscription_id');
            $table->string('description');
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        Schema::create('prices_subscription_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prices_subscription_id');
            $table->string('note');
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        //WITHOUT SUBSCRIPTION
        Schema::create('prices_not_subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            
            $table->timestampsTz(); //created_at et updated_at
            $table->softDeletes();
        });
        
        Schema::create('prices_not_subscription_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prices_not_subscription_id');
            $table->string('label');
            $table->decimal('price', 10, 2);
            
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
        Schema::dropIfExists('prices');
        Schema::dropIfExists('prices_subscription');
        Schema::dropIfExists('prices_subscription_contents');
        Schema::dropIfExists('prices_subscription_notes');
        Schema::dropIfExists('prices_not_subscription');
        Schema::dropIfExists('prices_not_subscription_items');
    }
}
