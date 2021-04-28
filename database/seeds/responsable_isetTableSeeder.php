<?php
use App\responsable_iset;
use Illuminate\Database\Seeder;

class responsable_isetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(responsable_iset::class, 10)->create();
        
    }
}
