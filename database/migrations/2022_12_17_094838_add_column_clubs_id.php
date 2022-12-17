<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnClubsId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fottbalers', function (Blueprint $table) {
            $table->foreignId('football_clubs_id')->nullable()->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fottbalers', function (Blueprint $table) {
            $table->dropForeign('fottbalers_football_clubs_id_foreign');

        });
    }
}
