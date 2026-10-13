<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Khairy';
        $nim = '242520088';
        $prodi = 'Teknologi informasi';
        
        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar() {
    $mahasiswa = [
        ['nama' => 'khai', 'nim' => '001', 'ipk' => 3.8],
        ['nama' => 'ucup', 'nim' => '002', 'ipk' => 3.2],
        ['nama' => 'edo', 'nim' => '003', 'ipk' => 2.5],
        ['nama' => 'ade', 'nim' => '004', 'ipk' => 3.6],
        ['nama' => 'janah', 'nim' => '005', 'ipk' => 1.9],
    ];
    return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function show($nim)
    {
    $mahasiswaList = [
        'M0522001' => ['nama' => 'khai', 'nim' => 'M0522001', 'ipk' => 3.8],
        'M0522002' => ['nama' => 'ucup', 'nim' => 'M0522002', 'ipk' => 3.2],
        'M0522003' => ['nama' => 'edo', 'nim' => 'M0522003', 'ipk' => 2.5],
        'M0522004' => ['nama' => 'ade', 'nim' => 'M0522004', 'ipk' => 3.6],
        'M0522005' => ['nama' => 'janah', 'nim' => 'M0522005', 'ipk' => 1.9],
    ];

    // Cek apakah NIM ada di dalam data, jika tidak panggil abort(404)
    abort_unless(array_key_exists($nim, $mahasiswaList), 404);

    $mhs = $mahasiswaList[$nim];

    return view('mahasiswa.detail', compact('mhs'));
    }

}
