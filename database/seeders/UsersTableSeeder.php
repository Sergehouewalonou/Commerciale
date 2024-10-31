<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([

        //Admin
        [
            'name'=>'Admin',
            'email'=>'Admin@gmail.com',
            'password'=>Hash::make('111'),
            'role'=>'Admin',
            'status'=>'active',

        ],

        //Gerant
        [
            'name'=>'Gerant',
            'email'=>'Gerant@gmail.com',
            'password'=>Hash::make('111'),
            'role'=>'Gerant',
            'status'=>'active',

        ],

        //User
        [
            'name'=>'User',
            'email'=>'User@gmail.com',
            'password'=>Hash::make('111'),
            'role'=>'User',
            'status'=>'active',

        ]

        ]);
    }
}
