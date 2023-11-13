<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\Tindakan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tagihan = Tagihan::all();

        return view('admin.tagihan.index', compact('tagihan'))
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
        $tindakan = Tindakan::all();

        return view('admin.tagihan.create', compact('user', 'tindakan'));
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
            'tindakan_id' => 'required',
            'total_biaya' => 'required',
        ]);

        $input = $request->all();

        // Pengguna::create($input);

            // return redirect()->route('pengguna.index');

        try {
            Tagihan::create($input);

            return redirect()->route('tagihan.index')
                ->with('success', 'Masukkan data Tagihan berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function show(Tagihan $tagihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tagihan $tagihan)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tagihan $tagihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tagihan $tagihan, $id)
    {
        //
        $tagihan::find($id);
        $tagihan = Tagihan::where('id', $id)->delete();

        return back()->with('success','Data Berhasil Dihapus');

    }

    public function tagihan(){
        $user = Auth::user();

        $tagihans = $user->tagihan;

        return view('landing.tagihan', ['tagihans' => $tagihans]);
    }
}
