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
        Schema::create('coworking_listing_proximities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coworking_id')->constrained()->onDelete('cascade');
            $table->foreignId('listing_id')->constrained()->onDelete('cascade');
            $table->float('distance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coworking_listing_proximities');
    }
};
