<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // tampilkan data ke index dari db
        $gaji = Gaji::all();
        // dd($users);

        return view('admin.karyawan.index', compact('gaji'))
        ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // masukan proses data form ke db
        $request->validate([
            'pemasangan' => 'required|numeric',
            'gaji_pokok' => 'required|numeric',
            'nama' => 'required|max:60',
            'gaji_kehadiran' => 'required|numeric',
        ]);

        $input = $request->all();

        try {
            Gaji::create($input);

            return redirect()->route('gaji.index')
                ->with('success', 'Masukkan data Gaji berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaji $gaji)
    {
        // return view data ke form
        $karyawan = Gaji::all();
        return view('admin.karyawan.edit', compact('gaji'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
        $request->validate([
            'pemasangan' => 'required|numeric',
            'gaji_pokok' => 'required|numeric',
            'nama' => 'required|max:60',
            'gaji_kehadiran' => 'required|numeric',
        ]);

        $input = $request->all();

        try {
              $gaji->update($input);

            return redirect()->route('gaji.index')
                ->with('success', 'Ubah data gaji karyawan berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji, $id)
    {
        // hapus data gaji
        $gaji::find($id);
        $gaji = Gaji::where('id', $id)->delete();

        return back()->with('success','Data Berhasil Dihapus');
    }
}
