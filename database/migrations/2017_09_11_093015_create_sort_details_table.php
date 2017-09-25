<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSortDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sort_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('time')->nullable();
            $table->integer('record_id')->nullable();
            $table->integer('action_id')->nullable();
            $table->integer('portfolio_id')->nullable();
            $table->integer('pass')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sort_details');
    }
}
