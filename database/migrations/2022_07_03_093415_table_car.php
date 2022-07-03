<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table ctn_car
        Schema::create('ctn_car', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedBigInteger('id_location');
           $table->unsignedBigInteger('id_brand');
           $table->unsignedBigInteger('id_model');
           $table->unsignedBigInteger('id_trans');
           $table->string('image');
           $table->boolean('condition'); // 1 is new, 0 is used
           $table->boolean('negotiable'); // 1 is negotiable, 0 is not negotiable
           $table->integer('displacement');
           $table->integer('price');
           $table->integer('price_discount');
           $table->string('year');
           $table->integer('status')->default(0); // 0 is inactive, 1 is active
           $table->timestamp('created_time')->nullable();
           $table->string('created_by', 45)->nullable();
           $table->timestamp('updated_time')->nullable();
           $table->string('updated_by', 45)->nullable();
           $table->timestamp('deleted_time')->nullable();
           $table->string('deleted_by', 45)->nullable();
           $table->foreign('id_location')->references('id')->on('m_location')->onDelete('cascade');
           $table->foreign('id_brand')->references('id')->on('m_brand')->onDelete('cascade');
           $table->foreign('id_model')->references('id')->on('m_model')->onDelete('cascade');
           $table->foreign('id_trans')->references('id')->on('m_trans')->onDelete('cascade');
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
        Schema::dropIfExists('ctn_car');
    }
}
