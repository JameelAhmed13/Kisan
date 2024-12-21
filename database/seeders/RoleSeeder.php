<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aryRoles = [
            ['roleID' => 1, 'roleName' => 'Super Admin', 'description' => 'Role for Super Admin'],
            ['roleID' => 2, 'roleName' => 'Director', 'description' => 'Role for Director'],
            ['roleID' => 3, 'roleName' => 'Deputy Director', 'description' => 'Role for Deputy Director'],
            ['roleID' => 4, 'roleName' => 'Operator', 'description' => 'Role for Operator'],
            ['roleID' => 5, 'roleName' => 'Manager', 'description' => 'Role for Manager'],
            ['roleID' => 6, 'roleName' => 'User', 'description' => 'Role for User'],
        ];
        foreach ($aryRoles as $role) {
            DB::table('roles')->insert([
                'roleID' => $role['roleID'],
                'roleName' => $role['roleName'],
                'description' => $role['description']
            ]);
        }
    }
}
