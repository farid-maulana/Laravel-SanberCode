<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->unsignedBigInteger('answers_id');
            $table->unsignedBigInteger('profiles_id');

            $table->foreign('answers_id')->references('id')->on('answers');
            $table->foreign('profiles_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['profiles_id']);
            $table->dropForeign(['answers_id']);
            $table->dropColumn(['profiles_id']);
            $table->dropColumn(['answers_id']);
        });
    }
}
