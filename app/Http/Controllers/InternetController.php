<?php

namespace App\Http\Controllers;

use App\Models\Internet;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class InternetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Tampil data from database internet
        // $internet = Internet::latest()->simplepaginate(5);
        $internet = Internet::latest()->simplepaginate(10);;
        // $internet = Internet::where('paket', '<', 5)->cursorPaginate(15);;

        return view('admin.internet.index', compact('internet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // tambah input ke form
        return view('admin.internet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // Proses menyimpan data paket ke db
           $request->validate([
            'paket' => 'required|max:30',
            'kecepatan' => 'required|max:30',
            'lama_penggunaan' => 'required',
            'harga' => 'required|numeric',
        ]);

        $input = $request->all();

        try {
            Internet::create($input);

            return redirect()->route('internet.index')
                ->with('success', 'Masukkan data internet berhasil!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }


        // return redirect()->route('internet.index')->with('success', 'Penambahan Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internet  $internet
     * @return \Illuminate\Http\Response
     */
    public function show(Internet $internet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internet  $internet
     * @return \Illuminate\Http\Response
     */
    public function edit(Internet $internet)
    {
        // edit data
        return view('admin.internet.edit', compact('internet'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internet  $internet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internet $internet)
    {
        // proses update data to db
        $request->validate([
            'paket' => 'required|max:30',
            'kecepatan' => 'required|max:30',
            'lama_penggunaan' => 'required',
            'harga' => 'required|numeric',
        ]);

        $input = $request->all();

        try {
            $internet->update($input);

            return redirect()->route('internet.index')
                ->with('success', 'Ubah data internet berhasill!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internet  $internet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internet $internet, $id)
    {
        // delete data paket
        $internet::find($id);
        $internet = Internet::where('id', $id)->delete();

        return back()->with('success','Data Berhasil Dihapus');
    }
}
