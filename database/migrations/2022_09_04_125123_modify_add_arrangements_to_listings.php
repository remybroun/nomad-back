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
        Schema::table('listings', function (Blueprint $table) {
            $table->json('arrangements')->nullable(true);
        });

        Schema::create("visits", function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('listing_id')->constrained();
            $table->string('url');
            $table->string('ip_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn('arrangements');
        });
//        Schema::drop('visits');
    }
};
