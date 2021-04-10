<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Id extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kb', function(Blueprint $table) {
            $table->dropPrimary('id_keluarga');
            // $table->id()
            //         ->first();
        });
        Schema::table('pembangunan', function(Blueprint $table) {
            $table->dropPrimary('id_keluarga');
            // $table->id()
            //         ->first();
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
