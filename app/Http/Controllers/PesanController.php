<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Http\Requests\StorePesanRequest;
use App\Http\Requests\UpdatePesanRequest;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pesan::latest()->paginate(10);
        return view('admin.pesan',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesanRequest $request)
    {
        $request->validate([
            'isi' => ['required','regex:/(^([a-zA-z ]+)(\d+)?$)/u','max:50','min:5'],
        ]);
        Pesan::insert([
            'pengunjung_id' => $request->session()->get('pengunjung_id'),
            'isi' => $request->isi,
        ]);
        return redirect('dashboard')->with('message','succses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesanRequest  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesanRequest $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        Pesan::destroy($pesan->id);
        return redirect('/pesan')->with('succses', 'Pesan Berhasil Dihapus');
    }
}
