<?php

namespace App\Http\Controllers;

use App\Models\Internet;
use App\Models\Pembayaran;
use App\Models\Pengguna;
use App\Models\User;
use App\Models\Wilayah;
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
        $pengguna = Pengguna::paginate(20);

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
        $user = User::all();
        $wilayah = Wilayah::all();

        // return view('admin.pengguna.create', compact('internet'));
        return view('admin.pengguna.create', compact('user', 'wilayah'));
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
            'user_id' => 'required',
            'nama' => 'required|max:60',
            'wilayah_id' => 'required|max:60',
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
        return view('admin.pengguna.edit', compact('pengguna'));
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
            'nama' => 'required|max:60',
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

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
    	// mengambil data dari table product sesuai pencarian data
		$pengguna = Pengguna::where('nama', 'like', "%" . $search . "%")->paginate(50);

		return view('admin.pengguna.index', compact('pengguna'))->with('no', (request()->input('page', 1) - 1) * 5);

    }
    // public function tagihans(Request $request, User $user){
    //     $user = User::find(2);
    //     dd($user);
    //     // return view('landing.tagihan', compact('user'));
    // }

}
