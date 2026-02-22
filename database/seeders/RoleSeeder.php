<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_name' => 'admin', 'description' => 'Administrator with full access'],
            ['role_name' => 'cashier', 'description' => 'Cashier with limited access'],
            ['role_name' => 'chef', 'description' => 'Chef with access to kitchen operations'],
            ['role_name' => 'customer', 'description' => 'Customer with access to order and profile management'],
        ];

        DB::table('roles')->insert($roles);
    }
}
