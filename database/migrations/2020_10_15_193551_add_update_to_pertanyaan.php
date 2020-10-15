<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdateToPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('answer_tepat_id');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('answer_tepat_id')->references('id')->on('jawaban');
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
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->dropForeign('answer_tepat_id' , 'profile_id');
            $table->dropColumn('answer_tepat_id' , 'profile_id');
            //
        });
    }
}
