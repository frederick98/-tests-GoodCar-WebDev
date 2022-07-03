<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTestimony extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table ctn_testimony
        Schema::create('ctn_testimony', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_transaction');
            $table->string('image');
            $table->string('testimony', 1000);
            $table->integer('status')->default(0); // 0 is inactive, 1 is active
            $table->timestamp('created_time')->nullable();
            $table->string('created_by', 45)->nullable();
            $table->timestamp('updated_time')->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->timestamp('deleted_time')->nullable();
            $table->string('deleted_by', 45)->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_transaction')->references('id')->on('t_transaction')->onDelete('cascade');
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
        Schema::dropIfExists('ctn_testimony');
    }
}
