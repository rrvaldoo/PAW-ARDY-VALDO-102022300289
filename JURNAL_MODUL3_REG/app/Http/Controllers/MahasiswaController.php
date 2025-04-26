<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object)[
            'nama' => 'Rivaldo',
            'nim' => '102022300289',
            'email' => 'aldokodot@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Rekayasa Industri'
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
