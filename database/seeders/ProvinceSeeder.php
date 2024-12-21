<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $aryProvinces = [
            ['provinceID' => 1, 'name' => 'Baluchistan', 'countryID' => 1],
        ];
        foreach ($aryProvinces as $aryProvince) {
            DB::table('province')->insert([
                'provinceID' => $aryProvince['provinceID'],
                'name' => $aryProvince['name'],
                'countryID' => $aryProvince['countryID'],
            ]);
        }
    }
}
