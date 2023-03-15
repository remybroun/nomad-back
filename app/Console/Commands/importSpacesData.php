<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Coworking;



class importSpacesData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:spaces';

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
        $locations = json_decode(file_get_contents(public_path() . "/regusData1.json"), true);
        // dd($locations);
        foreach ($locations as $index => $location) {

            if($location['Location']['Brand'] != 'Spaces'){
                continue;
            }


            $this->info($location['Location']['Id']);
            $this->info($location['Location']['Name']);
            $this->info($location['Location']['Address']);
            $this->info($location['Location']['ImageUrl']);
            $this->info($location['Location']['Url']);
            $this->info($location['Location']['lat']);
            $this->info($location['Location']['lng']);
            $this->info($location['Location']['City']);
        
            $this->info($index);
            // str_replace('[imageConfig]', 'c_fill,f_auto', $str)

            Coworking::firstOrCreate([
                "name" => $location['Location']['Name'],
                "main_image" => str_replace('[imageConfig]', 'c_fill,f_auto', $location['Location']['ImageUrl']),
                "city" => $location['Location']['City'],
                // "country" => $coworking['_address']['country'],
                "lng" => $location['Location']['lng'],
                "lat" => $location['Location']['lat'],
                "slug" => $this->generateSlug($location['Location']['Name']),
                "url" => 'https://regus.com'.$location['Location']['Url'],
                "brand" => 'spaces',
            ]);
            // Wework::firstOrCreate([
            //     "wework_id" => $location['id'],
            //     "default_name" => $location['default_name'],
            //     "image_url" => $location['image_url'],
            //     "address" => $location['address'],
            //     "city" => $location['city'],
            //     "country" => $location['countrygeo']['name'],
            //     "lng" => $location['_geoloc']['lng'],
            //     "lat" => $location['_geoloc']['lat'],
            //     "score" => 0,
            //     "slug" => $location['slug'],
            // ]);

        }
        return 0;
    }
}
