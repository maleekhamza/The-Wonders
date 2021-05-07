<?php

use Illuminate\Database\Seeder;
use App\Proposition;

class PropositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Proposition::class,10)->create();

    }
}
