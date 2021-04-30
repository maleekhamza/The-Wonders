<?php

use App\Salle;
use Illuminate\Database\Seeder;

class SallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Salle::class, 10)->create();
    }
}
