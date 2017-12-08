<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('users', function (Blueprint $table) {
            //$table->date( 'birthday')->nullable()->after('password');

        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('users', function (Blueprint $table) {
         //   $table->dropColumn( 'birthday');
        //});
    }
}
