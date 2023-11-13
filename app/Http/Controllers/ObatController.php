<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Tindakan;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obat = Obat::all();

        return view('admin.obat.index', compact('obat'))
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
        return view('admin.obat.create');
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
            'nama_obat' => 'required',
            'expired' => 'required',
        ]);

        $input = $request->all();

        // Pengguna::create($input);

            // return redirect()->route('pengguna.index');

        try {
            Obat::create($input);

            return redirect()->route('obat.index')
                ->with('success', 'Masukkan data obat berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat)
    {
        //
        return view('admin.obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat)
    {
        //
        $request->validate([
            'nama_obat' => 'required',
            'expired' => 'required',
        ]);

        $input = $request->all();

        try {
              $obat->update($input);

            return redirect()->route('obat.index')
                ->with('success', 'Ubah data obat berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Obat $obat)
    {
        //
        $obat::find($id);
        $obat = Obat::where('id', $id)->delete();

        return back()->with('success','Data Berhasil Dihapus');
    }
}
