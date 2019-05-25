<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([

        	[
        		'name' => 'Dhaka'
        	],
        	[
        		'name' => 'Chittagong'
        	],
        	[
        		'name' => 'Rajshahi'
        	],
        	[
        		'name' => 'Rangpur'
        	],
        	[
        		'name' => 'Khulna'
        	],
        	[
        		'name' => 'Sylhet'
        	],


        ]);
    }
}
