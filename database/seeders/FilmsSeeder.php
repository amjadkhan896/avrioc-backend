<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;



class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([[
            'name' => Str::random(10),
            'description' => Str::random(20),
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 1,
            'photo' => Str::random(10),
        ],[
            'name' => Str::random(10),
            'description' => Str::random(20),
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 2,
            'photo' => Str::random(10),
        ],[
            'name' => Str::random(10),
            'description' => Str::random(20),
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 1,
            'photo' => Str::random(10),
        ],[
            'name' => Str::random(10),
            'description' => Str::random(20),
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 2,
            'photo' => Str::random(10),
        ]]);
    }
}