<?php

use Illuminate\Database\Seeder;

class TherapistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Therapist table seed
        DB::table('therapists')->insert(array(
            [
                'users_id' => 1,
                'name' => 'Praktijk Ling',
                'city' => 'Rotterdam',
                'province' => 'Zuid-Holland',
                'street_name' => 'Zilvermos',
                'street_number' => 21,
                'street_number_ext' => 'A',
                'zip_code' => '3073BE',
            ],
            [
                'users_id' => 1,
                'name' => 'Praktijk Ying',
                'city' => 'Epe',
                'province' => 'Gelderland',
                'street_name' => 'Iep',
                'street_number' => 35,
                'street_number_ext' => '',
                'zip_code' => '2555GE',
            ]
        ));
    }
}
