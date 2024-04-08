<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
    Schema::create('product_status', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_id');
        $table->date('start_date');
        $table->date('end_date');
        $table->category('category');
        // Otros campos necesarios
        $table->timestamps();

        $table->foreign('product_id')->references('id')->on('product');
        });
    }
}