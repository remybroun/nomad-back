<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Wework;


class importWeworkData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:weworks';

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
    public function handle()
    {

        $weworks = json_decode(file_get_contents(public_path() . "/wework.json"), true);
        // dd($weworks);
        foreach ($weworks['hits'] as $index => $wework) {
            $this->info($wework['id']);
            $this->info($wework['default_name']);
            $this->info($wework['city']);
            $this->info($wework['slug']);
            $this->info($wework['image_url']);
            $this->info($wework['countrygeo']['name']);
            $this->info($wework['_geoloc']['lat']);
            $this->info($wework['_geoloc']['lng']);
            $this->info($index);

            Wework::create([
                "wework_id" => $wework['id'],
                "default_name" => $wework['default_name'],
                "image_url" => $wework['image_url'],
                "address" => $wework['address'],
                "city" => $wework['city'],
                "country" => $wework['countrygeo']['name'],
                "lng" => $wework['_geoloc']['lng'],
                "lat" => $wework['_geoloc']['lat'],
                "score" => 0,
                "slug" => $wework['slug'],
            ]);

        }
        return 0;
    }
}
