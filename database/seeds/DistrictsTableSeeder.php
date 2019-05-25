<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([

        	[
        		'name' => 'Rangamati',
        		'division_id' => 2
        	],
        	[
        		'name' => 'Gazipur',
        		'division_id' => 1
        	],
        	[
        		'name' => 'Bagherhat',
        		'division_id' => 5
        	],
        	[
        		'name' => 'Comilla',
        		'division_id' => 2
        	],


        ]);
    }
}
