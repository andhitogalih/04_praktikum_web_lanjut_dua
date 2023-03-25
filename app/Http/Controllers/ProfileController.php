<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Andhito Galih Nur Cahyo')
            ->with('short_name', 'Dhito')
            ->with('nim', '2141720128')
            ->with('absen', '06')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'andhitognc@gmail.com')
            ->with('idline', '@dhito')
            ->with('ig', '@Andhito_gnc');
    }
}