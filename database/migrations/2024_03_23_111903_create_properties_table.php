<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->integer('sqft');
            $table->tinyInteger('bedrooms');
            $table->tinyInteger('bathrooms');
            $table->tinyInteger('beds');
            $table->tinyInteger('guests');
            $table->tinyInteger('minNights');
            $table->string('location');
            $table->text('address');
            $table->json('accessible_options')->nullable();
            $table->boolean('standingDesk')->default(false);
            $table->boolean('ergonomicChair')->default(false);
            $table->boolean('externalMonitor')->default(false);
            $table->boolean('externalKeyboard')->default(false);
            $table->boolean('externalMouse')->default(false);
            $table->boolean('officeChair')->default(false);
            $table->boolean('officeDesk')->default(false);
            $table->boolean('officeLamp')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
