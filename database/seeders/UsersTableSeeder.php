<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Arthour',
            'email'=>'wimom25190@teknowa.com',
            'contact'=>'01968256757',  
            'address'=>'Gazipur',    
            'password'=> bcrypt('123456'),
        ]);
    }
}
