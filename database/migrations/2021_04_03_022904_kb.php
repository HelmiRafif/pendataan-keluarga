<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kb', function (Blueprint $table) {
            $table->string('No HP');
            $table->string('Alamat');
            $table->string('rt')->nullable();
            $table->string('id_keluarga');
            $table->string('II_1')->nullable();
            $table->string('II_1_a_1')->nullable();
            $table->string('II_1_a_2')->nullable();
            $table->string('II_1_b_1')->nullable();
            $table->string('II_1_b_2')->nullable();
            $table->string('II_2')->nullable();
            $table->string('II_3')->nullable();
            $table->string('II_3_a')->nullable();
            $table->string('II_3_a_1')->nullable();
            $table->string('II_3_b')->nullable();
            $table->string('II_4')->nullable();
            $table->string('II_4_a')->nullable();
            $table->string('II_5')->nullable();
            $table->string('II_5_a')->nullable();
            $table->string('II_5_b')->nullable();
            $table->string('II_6')->nullable();
            $table->string('II_7')->nullable();
            $table->string('II_8')->nullable();
            $table->string('II_9_a')->nullable();
            $table->string('II_9_b')->nullable();
            $table->string('II_9_c')->nullable();
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
