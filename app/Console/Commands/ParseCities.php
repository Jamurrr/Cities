<?php

namespace App\Console\Commands;

use App\Models\City;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ParseCities extends Command
{
    protected $signature = 'parse:cities';
    protected $description = 'Парсинг городов';

    public function handle()
    {
        $response = Http::get('https://api.hh.ru/areas');
        $areas = $response->json();

        foreach ($areas[0]['areas'] as $area) {
            if (!empty($area['areas'])) {
                foreach ($area['areas'] as $city) {
                    City::updateOrCreate(
                        ['slug' => Str::slug($city['name'])],
                        ['name' => $city['name']]
                    );
                }
            }
            else {
                City::updateOrCreate(
                    ['slug' => Str::slug($area['name'])],
                    ['name' => $area['name']]
                );
            }
        }

        $this->info('Парсинг прошел');
    }
}
