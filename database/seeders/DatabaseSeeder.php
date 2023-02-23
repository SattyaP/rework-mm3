<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            $faker = Faker::create('id_ID');
            DB::table('events')->insert([
                'title' => $faker->name()
            ]);
        }
        for ($u = 0; $u < 10; $u++) {
            $eventIDs = DB::table('events')->pluck('id');
            DB::table('event_photos')->insert([
                'event_id' => $eventIDs->shuffle()->first(),
                'image' => '/test/test.img'
            ]);
        }
    }
}
