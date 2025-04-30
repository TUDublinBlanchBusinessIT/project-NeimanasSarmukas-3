<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passengers', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable();  // Adding user_id column
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  // Foreign key constraint
    });
    }

    public function down()
    {
        Schema::table('passengers', function (Blueprint $table) {
            $table->dropForeign(['user_id']);  // Dropping the foreign key
            $table->dropColumn('user_id');  // Dropping the user_id column
        });
    }

}
