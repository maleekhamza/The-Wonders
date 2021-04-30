<?php

use App\Resp_media;
use Illuminate\Database\Seeder;

class Resp_mediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Resp_media::class,20)->create();
    }
}
