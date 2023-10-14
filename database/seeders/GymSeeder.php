<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'usertype'=>'1',
            'password'=>bcrypt('12345678')
        ]);


        DB::table('gyms')->insert([
            'name'=>'nada',
            'email'=>'nada@gmail.com',
            'phone'=>'102324144',
            'message'=>'thank u'
        ]);


        DB::table('messages')->insert([
            'name'=>'rana',
            'email'=>'rana@gmail.com',
            'message'=>'thank u'
        ]);


      
        
    }
}
