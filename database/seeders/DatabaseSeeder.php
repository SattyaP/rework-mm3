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
                'image' => 'storage/event-photo/p0YGorYuaLWEj6tFFBHWhXSyTzfy74bkKS6yHJxJ.webp'
            ]);
        }
        $tagIDs = DB::table('tags')->pluck('id');
        DB::table("blogs")->insert([
            "tag_id" =>$tagIDs->shuffle()->first(),
            "title" => "seed",
            "image" => "",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo earum possimus repudiandae, exercitationem optio voluptas cum nesciunt ad aspernatur ipsum odit hic dolor, non totam eveniet odio et nulla ullam!",
            "article" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo earum possimus repudiandae, exercitationem optio voluptas cum nesciunt ad aspernatur ipsum odit hic dolor, non totam eveniet odio et nulla ullam!"
        ]);
    }
}
