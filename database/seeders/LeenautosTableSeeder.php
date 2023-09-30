<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeenautosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leenautos')->insert([
            'merk' => 'Volkswagen',
            'type' => 'Golf',
            'bouwjaar' => 2020,
        ]);

        DB::table('leenautos')->insert([
            'merk' => 'Toyota',
            'type' => 'Camry',
            'bouwjaar' => 2019,
        ]);

        DB::table('leenautos')->insert([
            'merk' => 'Ford',
            'type' => 'Fusion',
            'bouwjaar' => 2018,
        ]);

     
    }
}









