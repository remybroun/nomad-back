<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Coworking;


class importCoworkingData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload-data:coworkings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    
    private function stripAccents($str) {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçćèéêęëìíîïñńòóôõöøùúûüýÿžÅÀÁÂÃÄÇÈÉÊËĠÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaacceeeeeiiiinnoooooouuuuyyzAAAAAACEEEEGIIIINOOOOOUUUUY');
    }

    private function generateSlug($string){
        $string = explode(",", $string)[0];
        $string = str_replace([',', "'", "ʻ", '.'], '-', $string);
        $string = str_replace([' '], '--', $string);
        $string = strtolower($string);
        $string = $this->stripAccents($string);

        return $string;
    }

    public function handle()
    {
        $coworkings = json_decode(file_get_contents(public_path() . "/nomadcoworking.json"), true);
        // dd($coworkings);
        foreach ($coworkings as $index => $coworking) {
            $this->info($coworking['id']);
            $this->info($coworking['listing_name']);
            $this->info($coworking['cover_image']);
            $this->info($coworking['latitude']);
            $this->info($coworking['longitude']);
            $this->info($coworking['city']);
            $this->info($coworking['country']);
            $this->info($coworking['space_url']);
            $this->info($index);

            Coworking::create([
                "name" => $coworking['listing_name'],
                "main_image" => $coworking['cover_image'],
                "city" => $coworking['city'],
                "country" => $coworking['country'],
                "lng" => $coworking['longitude'],
                "lat" => $coworking['latitude'],
                "slug" => $this->generateSlug($coworking['listing_name']),
                "url" => 'https://nomadcowork.com'.$coworking['space_url'],
            ]);

        }
        return 0;
    }
}
