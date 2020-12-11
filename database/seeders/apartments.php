<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class apartments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
          'title' => 'Parkside',
          'region' => 'Center',
          'location' => 'Center',
          'room' => '4',
          'guest' => '7',
          'price' => '17000',
          'details' => 'Found near the beach within minutes to nearest amenities.',
          'thumbnail' => 'thumb22.jpg',
          'image1' => 'prop_img22 (1).jpg',
          'image2' => 'prop_img22 (2).jpg',
          'image3' => 'prop_img22 (3).jpg',
        ]);
    }
}
