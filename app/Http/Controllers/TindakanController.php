<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Tindakan;
use App\Models\User;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tindakan = Tindakan::all();

        return view('admin.tindakan.index', compact('tindakan'))
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
        $user = User::all();
        $obat = Obat::all();

        return view('admin.tindakan.create', compact('user', 'obat'));
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
            'user_id' => 'required',
            'deskripsi_tindakan' => 'required',
            'obat_id' => 'required',
            'tanggal' => 'nullable',
        ]);

        $input = $request->all();

        // Pengguna::create($input);

            // return redirect()->route('pengguna.index');

        try {
            Tindakan::create($input);

            return redirect()->route('tindakan.index')
                ->with('success', 'Masukkan data tindakan berhasil!');
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
    public function edit(Tindakan $tindakan)
    {
        //
        return view('admin.tindakan.edit', compact('tindakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tindakan $tindakan)
    {
        //
        $request->validate([
            'deskripsi_tindakan' => 'required',
        ]);

        $input = $request->all();

        try {
              $tindakan->update($input);

            return redirect()->route('tindakan.index')
                ->with('success', 'Ubah data tindakan berhasil!');
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
    public function destroy($id, Tindakan $tindakan)
    {
        //
        $tindakan::find($id);
        $tindakan = Tindakan::where('id', $id)->delete();

        return back()->with('success','Data Berhasil Dihapus');
    }
}
