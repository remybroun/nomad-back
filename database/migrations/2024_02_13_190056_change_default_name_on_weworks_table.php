<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('weworks', function (Blueprint $table) {
            $table->string('name')->after('default_name');
        });

        // Copy data from default_name to name
        DB::statement('UPDATE weworks SET name = default_name');

        // Drop the default_name column
        Schema::table('weworks', function (Blueprint $table) {
            $table->dropColumn('default_name');
        });
    }

    public function down(): void
    {
        Schema::table('weworks', function (Blueprint $table) {
            $table->string('default_name')->after('name');
        });

        // Copy data from name to default_name
        DB::statement('UPDATE weworks SET default_name = name');

        // Drop the name column
        Schema::table('weworks', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};
