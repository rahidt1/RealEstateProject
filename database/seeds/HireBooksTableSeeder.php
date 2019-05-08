<?php

use Illuminate\Database\Seeder;

class HireBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\HireBook::class, 50)->create();
    }
}
