<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $userData = [
        [
            'name' => 'Admin',
            'email' => 'Admin123@gmail.com',
            'role' => 'Admin',
            'password' => bcrypt('123456')
        ],
    ];   

    foreach($userData as $key => $val){ 
     User::create($val);

    }
  }
}