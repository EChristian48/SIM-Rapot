<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToRayonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rayon', function (Blueprint $table) {
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rayon', function (Blueprint $table) {
            $table->dropForeign(['guru_id']);
        });
    }
}
