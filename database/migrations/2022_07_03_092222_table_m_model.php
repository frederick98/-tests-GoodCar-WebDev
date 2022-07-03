<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table m_model
        Schema::create('m_model', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedBigInteger('id_brand');
           $table->string('name');
           $table->string('image');
           $table->integer('status')->default(0);
           $table->timestamp('created_time')->nullable();
           $table->string('created_by', 45)->nullable();
           $table->timestamp('updated_time')->nullable();
           $table->string('updated_by', 45)->nullable();
           $table->timestamp('deleted_time')->nullable();
           $table->string('deleted_by', 45)->nullable();
           $table->foreign('id_brand')->references('id')->on('m_brand')->onDelete('cascade');
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
        Schema::dropIfExists('m_model');
    }
}
