<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'users_id' => 1,
            'title' => "Test Agenda",
            'date_start' => "2018-01-17 00:00:00",
            'date_end' => "2018-01-17 00:00:00",
            'full_day' => 1,
            'color' => '#16a085'
        ]);

        DB::table('events')->insert([
            'users_id' => 1,
            'title' => "Test Agenda 2",
            'date_start' => "2018-01-16 12:00:00",
            'date_end' => "2018-01-16 13:00:00",
            'full_day' => 0,
            'color' => '#16a085'
        ]);
    }
}
