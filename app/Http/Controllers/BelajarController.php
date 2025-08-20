<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BelajarController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('belajar', compact('users'));
    }
    public function getCallName()
    {
        return $this->callName();
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        // atau $angka2 = $request->input('angka2');

        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
        // return view('tambah', $data); (cara 3; datanya harus array)
    }


    public function kurang()
    {
        return view('kurang');
    }

    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 - $angka2;
        return view('kurang', compact('jumlah'));
    }

    public function kali()
    {
        return view('kali');
    }

    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 * $angka2;
        return view('kali', compact('jumlah'));
    }

    public function bagi()
    {
        return view('bagi');
    }

    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 / $angka2;
        return view('bagi', compact('jumlah'));
    }
}
