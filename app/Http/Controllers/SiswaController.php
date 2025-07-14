<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', ['siswas' => $siswas]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'jenis_kelamin' => 'required|boolean',
            'sekolah_asal' => 'required|string',
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'sekolah_asal' => $request->sekolah_asal,
        ]);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id); // Ambil data siswa berdasarkan ID
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'jenis_kelamin' => 'required|boolean',
            'sekolah_asal' => 'required|string',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'sekolah_asal' => $request->sekolah_asal,
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
