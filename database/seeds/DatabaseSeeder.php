<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PropertyListsTableSeeder::class);
        //$this->call(BookCategoriesTableSeeder::class);
        //$this->call(BooksTableSeeder::class);
        //$this->call(HireBooksTableSeeder::class);
    }
}
