<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('feedback_id')->references('id')->on('feedback')->onDelete('cascade');
        });
        Schema::table('replies', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
        Schema::table('feedback', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });
        /*Schema::table('statuses', function(Blueprint $table) {
            $table->foreign('feedback_id')->references('id')->on('feedback')->onDelete('cascade');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('feedback_id')->references('id')->on('users')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('feedback_id');
        });
        Schema::table('replies', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('comment_id');
        });
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
        //Schema::table('statuses', function (Blueprint $table) {
        //    $table->dropForeign('feedback_id');
        //});
       // Schema::table('categories', function (Blueprint $table) {
       //     $table->dropForeign('feedback_id');
       // });
    }
}
