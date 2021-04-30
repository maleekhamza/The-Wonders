<?php
use App\Statistique;
use Illuminate\Database\Seeder;

class StatistiqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Statistique::class,10)->create();
    }
}
