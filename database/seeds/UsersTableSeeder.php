<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SEED the user
        // Roles table seed
        DB::table('users')->insert([
            'name' => 'Joey',
            'email' => 'ktj.lim@gmail.com',
            'password' => bcrypt('secret'),
            'roles_id' => 1
        ]);

    }
}
