<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Faqseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'What industries do you serve?',
                'answer'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            ],
            [
                'question' => 'How do you ensure product quality?',
                'answer'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            ],
            [
                'question' => 'What sustainability practices do you follow?',
                'answer'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            ],
            [
                'question' => 'Do you offer customized solutions?',
                'answer'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            ],
            [
                'question' => 'How do you handle safety in the workplace?',
                'answer'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            ],
        ];

        DB::table('faqs')->insert($faqs);
    }
}
