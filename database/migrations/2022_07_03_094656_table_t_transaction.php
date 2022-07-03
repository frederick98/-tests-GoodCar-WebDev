<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table t_transaction
        Schema::create('t_transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->string('image');
            $table->integer('status')->default(0); // 0 is inactive, 1 is active
            $table->timestamp('created_time')->nullable();
            $table->string('created_by', 45)->nullable();
            $table->timestamp('updated_time')->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->timestamp('deleted_time')->nullable();
            $table->string('deleted_by', 45)->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade'); 
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
        Schema::dropIfExists('t_transaction');
    }
}
