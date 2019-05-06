<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');
            $table->string('mail');
            $table->string('facebook')->nullable();
            $table->string('maps')->nullable();
            $table->string('adress1');
            $table->string('adress2')->nullable();
            $table->string('adress3')->nullable();
            $table->string('tel');
            
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
        Schema::dropIfExists('contact');
    }
}
