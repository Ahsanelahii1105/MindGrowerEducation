<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('replycors', function (Blueprint $table) {
            $table->string('username')->after('reply'); // Adding the username column
        });
    }

    public function down()
    {
        Schema::table('replycors', function (Blueprint $table) {
            $table->dropColumn('username');
        });
    }

};