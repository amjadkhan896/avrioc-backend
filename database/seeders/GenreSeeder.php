<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([[
            'name' => Str::random(10),
            'slug' => Str::slug(Str::random(10))
        ],[
            'name' => Str::random(10),
            'slug' => Str::slug(Str::random(10))
        ],[
            'name' => Str::random(10),
            'slug' => Str::slug(Str::random(10))
        ],[
            'name' => Str::random(10),
            'slug' => Str::slug(Str::random(10))
        ]]);
    }
}