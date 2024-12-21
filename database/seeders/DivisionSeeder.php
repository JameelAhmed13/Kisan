<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $aryDivisions = [
            ['divisionID' => 1, 'name' => 'Kalat', 'provinceID' => 1],
            ['divisionID' => 2, 'name' => 'Loralai', 'provinceID' => 1],
            ['divisionID' => 3, 'name' => 'Zhob', 'provinceID' => 1],
            ['divisionID' => 4, 'name' => 'Makran', 'provinceID' => 1],
            ['divisionID' => 5, 'name' => 'Naseerabad', 'provinceID' => 1],
            ['divisionID' => 6, 'name' => 'Quetta', 'provinceID' => 1],
            ['divisionID' => 7, 'name' => 'Rakhshan', 'provinceID' => 1],
            ['divisionID' => 8, 'name' => 'Sibi', 'provinceID' => 1],
        ];
        foreach ($aryDivisions as $aryDivision) {
            DB::table('division')->insert([
                'divisionID' => $aryDivision['divisionID'],
                'name' => $aryDivision['name'],
                'provinceID' => $aryDivision['provinceID'],
            ]);
        }
    }
}
