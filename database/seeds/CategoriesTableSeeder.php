<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            1 => [
                'title' => 'Auto'
            ],
            2 => [
                'title' => 'Beauty and Fitness'
            ],
            3 => [
                'title' => 'Entertainment'
            ],
            4 => [
                'title' => 'Food and Dining'
            ],
            5 => [
                'title' => 'Health'
            ],
            6 => [
                'title' => 'Sports'
            ],
            7 => [
                'title' => 'Travel'
            ],
        ];

        \App\Models\Category::insert($categories);
    }
}
