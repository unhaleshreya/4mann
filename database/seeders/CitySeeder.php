<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\State;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            'Maharashtra' => ['Mumbai', 'Pune', 'Nagpur'],
            'Gujarat' => ['Ahmedabad', 'Surat', 'Vadodara'],
            'Rajasthan' => ['Jaipur', 'Udaipur', 'Jodhpur'],
            'Karnataka' => ['Bengaluru', 'Mysuru', 'Mangaluru'],
            'Delhi' => ['New Delhi', 'Dwarka', 'Rohini'],
        ];

        foreach ($cities as $stateName => $cityList) {
            $state = State::where('name', $stateName)->first();
            if ($state) {
                foreach ($cityList as $city) {
                    City::create([
                        'state_id' => $state->id,
                        'name' => $city
                    ]);
                }
            }
        }
    }
}
