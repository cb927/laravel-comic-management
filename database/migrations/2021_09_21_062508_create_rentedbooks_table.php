<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentedbooks', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->unique();
            $table->integer('floor');
            $table->integer('room_number');
            $table->string('rent_at');
            $table->string('return_at');
            $table->string('checkout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentedbooks');
    }
}
