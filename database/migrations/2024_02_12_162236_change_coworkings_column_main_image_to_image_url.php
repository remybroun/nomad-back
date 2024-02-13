<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('coworkings', function (Blueprint $table) {
            $table->string('image_url')->after('main_image');
        });

        // Copy data from main_image to image_url
        DB::statement('UPDATE coworkings SET image_url = main_image');

        // Drop the main_image column
        Schema::table('coworkings', function (Blueprint $table) {
            $table->dropColumn('main_image');
        });
    }

    public function down(): void
    {
        Schema::table('coworkings', function (Blueprint $table) {
            $table->string('main_image')->after('image_url');
        });

        // Copy data from image_url to main_image
        DB::statement('UPDATE coworkings SET main_image = image_url');

        // Drop the image_url column
        Schema::table('coworkings', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }

};
