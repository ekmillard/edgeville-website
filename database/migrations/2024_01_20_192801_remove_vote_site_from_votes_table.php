<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->dropColumn('vote_site');
        });
    }

    public function down()
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->string('vote_site')->nullable();
        });
    }
};
