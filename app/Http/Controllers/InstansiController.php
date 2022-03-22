<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use App\Http\Requests\StoreInstansiRequest;
use App\Http\Requests\UpdateInstansiRequest;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansis=Instansi::latest()->paginate(10);
        return view('admin.instansi', compact('instansis'));
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
     * @param  \App\Http\Requests\StoreInstansiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstansiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(Instansi $instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit(Instansi $instansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstansiRequest  $request
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstansiRequest $request, Instansi $instansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instansi $instansi)
    {
        //
    }
}
