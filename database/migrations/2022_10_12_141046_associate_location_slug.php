<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Listing;
use App\Models\Location;

return new class extends Migration
{
    private function generateSlug($string){
        $string = explode(",", $string)[0];
        $string = strtolower(str_replace([',', "'", ' ', '.'], '-', $string));
        return $string;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });

        // $listings = Listing::get();
        // foreach($listings as $listing){
        //     $location_obj = Location::where("name", $listing->location)->first();
        //     $listing->location()->associate($location_obj);
        //     $listing->save();
        // }

        // Schema::dropIfExists('location');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
