<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kependudukan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kependudukan', function (Blueprint $table) {
            $table->string('id_keluarga');
            $table->string('I_1')->nullable();
            $table->string('I_2')->nullable();
            $table->string('I_2a')->nullable();
            $table->string('I_3')->nullable();
            $table->string('I_456')->nullable();
            $table->string('I_7')->nullable();
            $table->string('I_8')->nullable();
            $table->string('I_9')->nullable();
            $table->string('I_10')->nullable();
            $table->string('I_11')->nullable();
            $table->string('I_12')->nullable();
            $table->string('I_13')->nullable();
            $table->string('I_14')->nullable();
            $table->string('I_15')->nullable();
            $table->string('I_16')->nullable();
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
        //
    }
}
