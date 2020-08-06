<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->unsignedBigInteger('questions_id');
            $table->unsignedBigInteger('profiles_id');

            $table->foreign('questions_id')->references('id')->on('questions');
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
        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign(['profiles_id']);
            $table->dropForeign(['questions_id']);
            $table->dropColumn(['profiles_id']);
            $table->dropColumn(['questions_id']);
        });
    }
}
