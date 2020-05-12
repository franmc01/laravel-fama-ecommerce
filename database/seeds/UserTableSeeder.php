<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= new User();
        $admin->name="Angel Moreira";
        $admin->email="anyomoal@hotmail.com";
        $admin->password=bcrypt('famashop2020');
        $admin->save();
    }
}
