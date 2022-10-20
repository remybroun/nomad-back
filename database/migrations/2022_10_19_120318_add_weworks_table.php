<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weworks', function (Blueprint $table) {
            $table->id();
            $table->string("wework_id")->unique();
            $table->string("default_name");
            $table->string("image_url");
            $table->string("address");
            $table->string("country");
            $table->string("city");
            $table->float("lat");
            $table->float("lng");
            $table->float("score");
            $table->string("slug")->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weworks');
    }
};
