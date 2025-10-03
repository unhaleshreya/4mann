<?php

namespace Database\Seeders;

use App\Models\leadership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadershipTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Suresh Gala - Only content1
        leadership::create([
            'name' => 'Suresh Gala',
            'position' => 'Managing Director',
            'content1' => 'A visionary leader and the cornerstone of 4MANN GROUP. He brings over 30 years of entrepreneurial excellence to the company.
            As Managing Director, his unwavering dedication and forward-thinking approach have shaped 4MANN into a trusted brand in Aluminium Composite Panels and Iron Ore Beneficiation.',
            'content2' => '',
        ]);

        // Dharm Gala - Only content2
        leadership::create([
            'name' => 'Dharm Gala',
            'position' => 'Director',
            'content1' => '',
            'content2' => 'A Chartered Accountant by qualification and a new-age leader by mindset, he brings a rare blend of financial discipline and modern business vision to 4MANN GROUP.
            His sharp instincts, quick decision-making, and aggressive market approach have been instrumental in expanding the brand’s presence across India.',
        ]);
    }

}
