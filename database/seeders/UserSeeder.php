<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'Andhito',
                'name' => 'Andhito Galih Nur Cahyo',
                'email' => 'andhitognd@gmail.com',
                'password' => Hash::make('dhito')
            ],
            [
                'username' => 'alfi',
                'name' => 'Alfi Surya Pratama',
                'email' => '2141720075@student.polinema.ac.id',
                'password' => Hash::make('surya')
            ]
        ];
        DB::table('users')->insert($data);
    }
}
