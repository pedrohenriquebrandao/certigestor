<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validations', function (Blueprint $table) {
            $table->id();
            $table->string('ticket');
            $table->string('name');
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('type');
            $table->string('phone');
            $table->string('email');
            $table->string('validity');
            $table->string('price');
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
        Schema::dropIfExists('validations');
    }
}
