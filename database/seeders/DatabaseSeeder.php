<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Ellink;
use App\Models\Ellist;
use App\Models\Review;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // Category::factory(5)->create();
        User::factory(3)->create();
        Ellist::factory(9)->create();
        Ellink::factory(40)->create();
        Review::factory(70)->create();
        Tag::factory(130)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i = 0; $i < 34; $i++) {
            $ellist = Ellist::inRandomOrder()->first();
            $ellist2 = Ellist::inRandomOrder()->first();
            $ellink = Ellink::inRandomOrder()->first();
            $tag = Tag::inRandomOrder()->first();
            DB::table('ellink_ellist')->insert([
                'ellist_id' => $ellist->id,
                'ellink_id' => $ellink->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('ellist_tag')->insert([
                'tag_id' => $tag->id,
                'ellist_id' => $ellist2->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
