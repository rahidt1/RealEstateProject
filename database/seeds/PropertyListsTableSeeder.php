<?php

use Illuminate\Database\Seeder;

class PropertyListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PropertyList::class, 50)->create();
    }
}
