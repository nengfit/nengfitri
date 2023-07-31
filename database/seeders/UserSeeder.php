<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $userData = [
            [
                'name'=> 'saya admin',
                'email'=>'saya@gmail.com',
                'role'=>'administrator',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=> 'saya karyawan',
                'email'=>'karyawan@gmail.com',
                'role'=>'karyawan',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
