<?php

namespace App\Http\Controllers;

use App\Models\Internet;
use App\Models\MasaAktif;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class MasaAktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan table data masa aktif ke view
        $masaAktif = MasaAktif::latest()->paginate(10);

        return view('admin.masa-aktif.index', compact('masaAktif'))
        ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return perintah ke form tambah
        $pengguna = Pengguna::all();
        $internet = Internet::all();

        return view('admin.masa-aktif.create', compact('pengguna', 'internet'));

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasaAktif  $masaAktif
     * @return \Illuminate\Http\Response
     */
    public function show(MasaAktif $masaAktif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasaAktif  $masaAktif
     * @return \Illuminate\Http\Response
     */
    public function edit(MasaAktif $masaAktif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasaAktif  $masaAktif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasaAktif $masaAktif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasaAktif  $masaAktif
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasaAktif $masaAktif)
    {
        //
    }
}
