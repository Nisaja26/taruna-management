<?php

namespace App\Http\Controllers;

use App\Models\Taruna;
use Illuminate\Http\Request;

class TarunaController extends Controller
{
    public function index()
    {
        $data_taruna = Taruna::all();

        return view('pages.taruna.index', [
            'data_taruna' => $data_taruna
        ]);
    }

    public function create()
    {
        return view('pages.taruna.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'nit' => 'required|min:7',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Taruna::create($validasi);

        return redirect()->back();
    }
}
