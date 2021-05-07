<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SallesTableSeeder::class);
        $this->call(responsable_isetTableSeeder::class);
    }
}
