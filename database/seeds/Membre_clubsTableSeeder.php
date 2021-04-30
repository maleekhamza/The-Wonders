<?php


use Illuminate\Database\Seeder;
use App\Membre_club;
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
