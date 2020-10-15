<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdateToKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('answer_id')->references('id')->on('jawaban');
            $table->foreign('profile_id')->references('id')->on('profil');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->dropForeign('answer_id' , 'profile_id');
            $table->dropColumn('answer_id' , 'profile_id');
            //
        });
    }
}
