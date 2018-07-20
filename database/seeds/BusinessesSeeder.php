<?php

use Illuminate\Database\Seeder;

class BusinessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Business::class, 20)->create();
    }
}
