<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueVisitsToBlogsTable extends Migration
{
    public function up()
    {
        Schema::table('visitors', function (Blueprint $table) {
            $table->unsignedBigInteger('unique_visits')->default(0);
        });
    }

    public function down()
    {
        Schema::table('visitors', function (Blueprint $table) {
            $table->dropColumn('unique_visits');
        });
    }
}

