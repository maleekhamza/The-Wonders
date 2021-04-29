<?php

use App\Membre_club;
use Illuminate\Database\Seeder;

class Membre_clubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Membre_club::class,12)->create();
    }
}
