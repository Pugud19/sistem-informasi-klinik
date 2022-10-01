<?php

namespace App\Http\Controllers;

use App\Models\Internet;
use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // tampilkan data ke index dari db
        $pengguna = Pengguna::latest()->paginate(10);

        return view('admin.pengguna.index', compact('pengguna'))
        ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create data ke db
        // $internet = Internet::all();

        // return view('admin.pengguna.create', compact('internet'));
        return view('admin.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // masukan proses data form ke db
        $request->validate([
            'costumer_id' => 'required|numeric',
            'paket' => 'required',
            'nama' => 'required|max:60',
            'router' => 'required|max:60',
            'teknisi' => 'required|max:60',
            'tempat' => 'required|max:60',
            'tagihan' => 'required|max:60',
            'status_tagihan' => 'required',
            'keterangan' => 'required|max:60',
            'nomor_hp' => 'nullable',
        ]);

        $input = $request->all();

        // Pengguna::create($input);

            // return redirect()->route('pengguna.index');

        try {
            Pengguna::create($input);

            return redirect()->route('pengguna.index')
                ->with('success', 'Masukkan data pengguna berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        // return view edit ke form
        $user = User::all();
        return view('admin.pengguna.edit', compact('user', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        // edit form ke db
        $request->validate([
            'costumer_id' => 'required|numeric',
            'paket' => 'required',
            'nama' => 'required|max:60',
            'router' => 'required|max:60',
            'teknisi' => 'required|max:60',
            'tempat' => 'required|max:60',
            'tagihan' => 'required|max:60',
            'status_tagihan' => 'required',
            'keterangan' => 'required|max:60',
            'nomor_hp' => 'nullable',
        ]);

        $input = $request->all();

        try {
              $pengguna->update($input);

            return redirect()->route('pengguna.index')
                ->with('success', 'Ubah data pengguna berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna, $id)
    {
        // delete data Pengguna
        $pengguna::find($id);
        $pengguna = Pengguna::where('id', $id)->delete();

        return back()->with('success','Data Berhasil Dihapus');
    }
}
