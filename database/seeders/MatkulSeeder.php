<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
        [
            'hari'=>'Senin',
            'kodemk' => 'RTI214006',
            'mataKuliah'=> 'Ade Ismail, S.Kom., M.TI.',
            'Dosen' => 'Jaringan Komputer',
        ],
        [
            'hari'=>'Senin',
            'kodemk' => 'RTI214003',
            'mataKuliah'=> 'Chandrasena Setiadi, S.T., M.Tr.T.',
            'Dosen' => 'Manajemen Proyek',
        ],
        [
            'hari'=>'Selasa',
            'kodemk' => 'RTI214001	',
            'mataKuliah'=> 'Kewarganegaraan',
            'Dosen' => 'Widaningsih, S.H., M.H.',
        ],
        [
            'hari'=>'Selasa',
            'kodemk' => 'RTI214002',
            'mataKuliah'=> 'Analisis dan Desain Berorentasi Objek',
            'Dosen' => 'Vit Zuraida, S.Kom., M.Kom.',
        ],
        [
            'hari'=>'Rabu',
            'kodemk' => 'RTI214008',
            'mataKuliah'=> 'Pemrograman Web Lanjut',
            'Dosen' => 'Mamluatul Haniah. S.Kom., M.Kom.',
        ],
        [
            'hari'=>'Rabu',
            'kodemk' => 'RTI214005',
            'mataKuliah'=> 'Business Intelligence',
            'Dosen' => 'Irsyad Arif Mashudi, S.Kom., M.Kom',
        ],
        [
            'hari'=>'Kamis',
            'kodemk' => 'RTI214009',
            'mataKuliah'=> 'Statistik Komputasi',
            'Dosen' => 'Muhammad Afif Hendrawan, S.Kom., M.T.',
        ],
        [
            'hari'=>'Kamis',
            'kodemk' => 'RTI214004',
            'mataKuliah'=> 'Proyek 1',
            'Dosen' => 'Rokhimatul Wakhidah, S.Pd., M.T.',
        ],
        [
            'hari'=>'Jumat',
            'kodemk' => 'RTI214007',
            'mataKuliah'=> 'Praktikum Jaringan Komputer',
            'Dosen' => 'Ade Ismail, S.Kom., M.TI.',
        ],
    ];
    DB::table('pegawai')->insert($data);
    }
}

    

