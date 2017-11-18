<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles table seed
        DB::table('roles')->insert(array(
            ['name' => 'admin'],
            ['name' => 'user']
        ));
    }
}
