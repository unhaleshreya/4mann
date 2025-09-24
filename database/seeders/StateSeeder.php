<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\City;

class StateSeeder extends Seeder
{


      public function run(): void
    {
        $url = "https://raw.githubusercontent.com/nshntarora/Indian-Cities-JSON/master/cities.json";
        $json = file_get_contents($url);
        $citiesData = json_decode($json, true);

        foreach ($citiesData as $city) {
            // Ensure state exists
            $state = State::firstOrCreate(['name' => $city['state']]);

            // Ensure city exists
            City::firstOrCreate([
                'name' => $city['name'],
                'state_id' => $state->id,
            ]);
        }
    }

}
