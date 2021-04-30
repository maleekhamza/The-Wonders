<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
    
        $this->call(EvenementsTableSeeder::class);
        $this->call(Membre_clubsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(Resp_mediasTableSeeder::class);

    }
}
