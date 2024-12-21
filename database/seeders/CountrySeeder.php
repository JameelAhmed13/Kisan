<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $aryCountries = [
            ['countryID' => 1, 'name' => 'Pakistan'],
        ];
        foreach ($aryCountries as $aryCountry) {
            DB::table('country')->insert([
                'countryID' => $aryCountry['countryID'],
                'name' => $aryCountry['name'],
            ]);
        }
    }
}
