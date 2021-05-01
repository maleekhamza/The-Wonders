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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(Resp_mediasTableSeeder::class);
=======
        $this->call(responsable_isetTableSeeder::class);
        $this->call(SalleTableSeeder::class);
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
    }
}
