<?php

namespace Database\Seeders;

use App\Models\Roles;
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
        //
        DB::table('roles')->insert([
            'role_name' => 'User'
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Mod'
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Admin'
        ]);
    }
}
