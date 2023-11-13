<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wilayah = Wilayah::all();

        return view('admin.wilayah.index', compact('wilayah'))
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
        return view('admin.wilayah.create');
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
            'nama_wilayah' => 'required',
        ]);

        $input = $request->all();

        // Pengguna::create($input);

            // return redirect()->route('pengguna.index');

        try {
            Wilayah::create($input);

            return redirect()->route('wilayah.index')
                ->with('success', 'Masukkan data wilayah berhasil!');
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
    public function edit(Wilayah $wilayah)
    {
        //
        return view('admin.wilayah.edit', compact('wilayah'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wilayah $wilayah)
    {
        //
        // edit form ke db
        $request->validate([
            'nama_wilayah' => 'required'
        ]);

        $input = $request->all();

        try {
              $wilayah->update($input);

            return redirect()->route('wilayah.index')
                ->with('success', 'Ubah data wilayah berhasil!');
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
    public function destroy(Wilayah $wilayah, $id)
    {
        //
        $wilayah::find($id);
        $wilayah = Wilayah::where('id', $id)->delete();

        return back()->with('success','Data Berhasil Dihapus');
    }
}
