<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            [
                'name' => 'Section A of Class 1',
                'class_id' => '1',
            ],
            [
                'name' => 'Section B of Class 1',
                'class_id' => '1',
            ],

            [
                'name' => 'Section A of Class 2',
                'class_id' => '2',
            ],
            [
                'name' => 'Section B of Class 2',
                'class_id' => '2',
            ],

            [
                'name' => 'Section A of Class 3',
                'class_id' => '3',
            ],
            [
                'name' => 'Section B of Class 3',
                'class_id' => '3',
            ],

            [
                'name' => 'Section A of Class 4',
                'class_id' => '4',
            ],
            [
                'name' => 'Section B of Class 4',
                'class_id' => '4',
            ],

            [
                'name' => 'Section A of Class 5',
                'class_id' => '5',
            ],
            [
                'name' => 'Section B of Class 5',
                'class_id' => '5',
            ],
        ];

        Section::insert($sections);
    }
}
