<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pembangunan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembangunan', function (Blueprint $table) {
            $table->string('id_keluarga');
            $table->string('III_1')->nullable();
            $table->string('III_2')->nullable();
            $table->string('III_3')->nullable();
            $table->string('III_3a')->nullable();
            $table->string('III_3b')->nullable();
            $table->string('III_3c')->nullable();
            $table->string('III_3d')->nullable();
            $table->string('III_4')->nullable();
            $table->string('III_5')->nullable();
            $table->string('III_6')->nullable();
            $table->string('III_7')->nullable();
            $table->string('III_8')->nullable();
            $table->string('III_9')->nullable();
            $table->string('III_10')->nullable();
            $table->string('III_11')->nullable();
            $table->string('III_12')->nullable();
            $table->string('III_13')->nullable();
            $table->string('III_14')->nullable();
            $table->string('III_15')->nullable();
            $table->string('III_16')->nullable();
            $table->string('III_17')->nullable();
            $table->string('III_18a')->nullable();
            $table->string('III_18b')->nullable();
            $table->string('III_18c')->nullable();
            $table->string('III_18d')->nullable();
            $table->string('III_19')->nullable();
            $table->string('III_20')->nullable();
            $table->string('III_21')->nullable();
            $table->string('III_22')->nullable();
            $table->string('III_23')->nullable();
            $table->string('III_24')->nullable();
            $table->string('III_25')->nullable();
            $table->string('III_26')->nullable();
            $table->string('III_27')->nullable();
            $table->string('III_28')->nullable();
            $table->string('III_29')->nullable();
            $table->string('III_30')->nullable();
            $table->string('III_31')->nullable();
            $table->string('III_32')->nullable();
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
