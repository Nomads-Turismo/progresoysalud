<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('details');
            $table->decimal('price_1_day');
            $table->decimal('price_2_days');
            $table->decimal('price_3_days');
            $table->decimal('price_4_days');
            $table->decimal('price_5_days');
            $table->decimal('price_6_days');
            $table->decimal('price_7_days');
            $table->timestamps();
        });
    }
}