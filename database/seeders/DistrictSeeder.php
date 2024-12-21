<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $aryDistricts = [
            ['districtID' => 1, 'name' => 'Chaman', 'divisionID' => 6],
            ['districtID' => 2, 'name' => 'Harnai', 'divisionID' => 8],
            ['districtID' => 3, 'name' => 'Killa Abdullah', 'divisionID' => 6],
            ['districtID' => 4, 'name' => 'Pishin', 'divisionID' => 6],
            ['districtID' => 5, 'name' => 'Quetta', 'divisionID' => 6],
            ['districtID' => 6, 'name' => 'Duki'],
            ['districtID' => 7, 'name' => 'Killa Saifullah', 'divisionID' => 3],
            ['districtID' => 8, 'name' => 'Loralai'],
            ['districtID' => 9, 'name' => 'Sherani', 'divisionID' => 3],
            ['districtID' => 10, 'name' => 'Zhob', 'divisionID' => 3],
            ['districtID' => 11, 'name' => 'Ziarat', 'divisionID' => 8],
            ['districtID' => 12, 'name' => 'Kalat', 'divisionID' => 1],
            ['districtID' => 13, 'name' => 'Kharan', 'divisionID' => 7],
            ['districtID' => 14, 'name' => 'Khuzdar', 'divisionID' => 1],
            ['districtID' => 15, 'name' => 'Mastung', 'divisionID' => 1],
            ['districtID' => 16, 'name' => 'Noshki'],
            ['districtID' => 17, 'name' => 'Surab', 'divisionID' => 1],
            ['districtID' => 18, 'name' => 'Washuk', 'divisionID' => 7],
            ['districtID' => 19, 'name' => 'Awaran', 'divisionID' => 1],
            ['districtID' => 20, 'name' => 'Gawadar'],
            ['districtID' => 21, 'name' => 'Lasbela', 'divisionID' => 1],
            ['districtID' => 22, 'name' => 'Panjgur'],
            ['districtID' => 23, 'name' => 'Kachi', 'divisionID' => 5],
            ['districtID' => 24, 'name' => 'Sibi', 'divisionID' => 8],
            ['districtID' => 25, 'name' => 'Jhal Magsi', 'divisionID' => 5],
            ['districtID' => 26, 'name' => 'Naseerabad', 'divisionID' => 5],
            ['districtID' => 27, 'name' => 'Jaffarabad', 'divisionID' => 5],
            ['districtID' => 28, 'name' => 'Sohbatr Pur', 'divisionID' => 5],
            ['districtID' => 29, 'name' => 'Usta Muhammad', 'divisionID' => 5],
            ['districtID' => 30, 'name' => 'Barkhan'],
            ['districtID' => 31, 'name' => 'Dera Bugti', 'divisionID' => 8],
            ['districtID' => 32, 'name' => 'Kohlu', 'divisionID' => 8],
            ['districtID' => 33, 'name' => 'Musakhel'],
            ['districtID' => 34, 'name' => 'Kech'],
            ['districtID' => 35, 'name' => "Chagai", 'divisionID' => 7],
        ];
        foreach ($aryDistricts as $aryDistrict) {
            DB::table('district')->insert([
                'districtID' => $aryDistrict['districtID'],
                'name' => $aryDistrict['name'],
                'divisionID' => $aryDistrict['divisionID'] ?? null,
            ]);
        }
    }
}
