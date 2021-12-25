<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new User();
       $user->name = "admin";
       $user->email = "admin@gmail.com";
       $user->password = Hash::make("123123");
       $user->save();

       User::factory(20)->create();
    }
}
