<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camiones', function (Blueprint $table) {
            $table->id();
            $table->decimal('potencia', 8, 2);
            $table->string('matricula')->unique();
            $table->string('modelo');
            $table->string('tipo');
            $table->unsignedBigInteger('camionero_id');
            $table->foreign('camionero_id')->references('id')->on('camioneros')->onDelete('cascade');
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
        Schema::dropIfExists('camiones');
    }
};
