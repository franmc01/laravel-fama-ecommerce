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
        $this->call(CategoriasTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(InformacionTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(SubmarcasTableSeeder::class);
    }
}
