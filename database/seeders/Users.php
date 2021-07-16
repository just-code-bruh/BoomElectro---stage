<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\Table;
use Database\Seeders\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('users')->insert([
            [
            'full_name'=>'hamza lamez',
            'email'=>'lol@gmail.com',
            'password'=>Hash::make('123456'),
            'phone'=>'0664853122',
            'role'=>'admin'
            ],

            [
            'full_name'=>'mohcin rajol',
            'email'=>'xdxd@gmail.com',
            'password'=>Hash::make('123456'),
            'phone'=>'0664853122',
            'role'=>'customer'
            ],
        ]);
    }
}
