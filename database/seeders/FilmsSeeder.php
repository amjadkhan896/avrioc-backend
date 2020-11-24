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
            'name' => 'Test 1',
            'description' => "Behind the scenes, Avengers: Endgame stunt coordinator Sam Hargrave makes
            his directorial debut on Extraction, which has been written by Endgame co-director Joe Russo.
            Joe is also a producer on Extraction alongside his brother and fellow Endgame co-director Anthony Russo,
             in addition to Mike Larocca, Eric Gitter, Peter Schwerin, and Hemsworth. Extraction is a production of AGBO
             Films — that's the Russo brothers' banner — and TGIM Films, whose only other production till date was
              the Charlize Theron-starrer action spy thriller, Atomic Blonde.",
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 1,
            'photo' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRELEr5bWH1Z9ZlYjofDbRoW0ToFJop6YlcJuVU8lAYt2peph_n',
        ],[
            'name' => 'Test 2',
            'description' => "Behind the scenes, Avengers: Endgame stunt coordinator Sam Hargrave makes his directorial debut on Extraction, which has been written by Endgame co-director Joe Russo. Joe is also a producer on Extraction alongside his brother and fellow Endgame co-director Anthony Russo, in addition to Mike Larocca, Eric Gitter, Peter Schwerin, and Hemsworth. Extraction is a production of AGBO Films — that's the Russo brothers' banner — and TGIM Films, whose only other production till date was the Charlize Theron-starrer action spy thriller, Atomic Blonde.",
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 2,
            'photo' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRELEr5bWH1Z9ZlYjofDbRoW0ToFJop6YlcJuVU8lAYt2peph_n',
        ],[
            'name' => 'Test 3',
            'description' => "Behind the scenes, Avengers: Endgame stunt coordinator Sam Hargrave makes his directorial debut on Extraction, which has been written by Endgame co-director Joe Russo. Joe is also a producer on Extraction alongside his brother and fellow Endgame co-director Anthony Russo, in addition to Mike Larocca, Eric Gitter, Peter Schwerin, and Hemsworth. Extraction is a production of AGBO Films — that's the Russo brothers' banner — and TGIM Films, whose only other production till date was the Charlize Theron-starrer action spy thriller, Atomic Blonde.",
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 1,
            'photo' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRELEr5bWH1Z9ZlYjofDbRoW0ToFJop6YlcJuVU8lAYt2peph_n',
        ],[
            'name' => 'Test 4',
            'description' => "Behind the scenes, Avengers: Endgame stunt coordinator Sam Hargrave makes his directorial debut on Extraction, which has been written by Endgame co-director Joe Russo. Joe is also a producer on Extraction alongside his brother and fellow Endgame co-director Anthony Russo, in addition to Mike Larocca, Eric Gitter, Peter Schwerin, and Hemsworth. Extraction is a production of AGBO Films — that's the Russo brothers' banner — and TGIM Films, whose only other production till date was the Charlize Theron-starrer action spy thriller, Atomic Blonde.",
            'release_date' => Carbon::create('2000', '01', '01'),
            'rating' => '4.0',
            'ticket_price' => 500,
            'country' => "Pakistan",
            'genre' => 2,
            'photo' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRELEr5bWH1Z9ZlYjofDbRoW0ToFJop6YlcJuVU8lAYt2peph_n',
        ]]);
    }
}