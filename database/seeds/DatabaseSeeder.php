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
        $this->call(ClubsTableSeeder::class);
        $this->call(Membre_clubsTableSeeder::class);
        $this->call(Resp_mediasTableSeeder::class);
        $this->call(PropositionTableSeeder::class);
        $this->call(StatistiqueTableSeeder::class);
        $this->call(EvenementsTableSeeder::class);
        $this->call(UtilisateurTableSeeder::class);
       
        
        // $this->call(UsersTableSeeder::class)    

    }
}
