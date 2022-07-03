<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table m_location
        Schema::create('m_location', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name');
           $table->integer('status')->default(0); // 0 is inactive, 1 is active
           $table->timestamp('created_time')->nullable();
           $table->string('created_by', 45)->nullable();
           $table->timestamp('updated_time')->nullable();
           $table->string('updated_by', 45)->nullable();
           $table->timestamp('deleted_time')->nullable();
           $table->string('deleted_by', 45)->nullable();

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop existing table
        Schema::dropIfExists('m_location');
    }
}
