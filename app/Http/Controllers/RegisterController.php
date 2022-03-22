<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use App\Models\Instansi;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('status')){
            return redirect('/dashboard');
        };
        return view('register');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 
               'min:4','max:64', 
               'regex:/(^([a-zA-z ]+)(\d+)?$)/u'],
            'asal_instansi'=>['required', 
               'min:4','max:64', 
               'regex:/(^([a-zA-z ]+)(\d+)?$)/u'],
            'email' =>['required','email'],
            'no_tlpn' =>['required','digits_between:11,13', 'numeric'],
               
        ]);
        if(Pengunjung::where([['name',$request->name],['asal_instansi',$request->asal_instansi],['email',$request->email],['no_tlpn',$request->no_tlpn]])->first() == null ) { 
            Pengunjung::create([
                'name' => $request->name,
                'asal_instansi' => $request->asal_instansi,
                'email' => $request->email,
                'no_tlpn' => $request->no_tlpn,
                'status' => 'active',
            ]);
            Instansi::updateOrCreate(['nama_instansi' => $request->asal_instansi],
            ['nama_instansi' => $request->asal_instansi]);
            $request->session()->put('status', "Sudah Masuk");
            return redirect('/dashboard')->with('success','Selamat Datang')->with('user', $request->username);
         }
        Pengunjung::where([['name',$request->name],['asal_instansi',$request->asal_instansi],['email',$request->email],['no_tlpn',$request->no_tlpn]])->update(['updated_at' => Carbon::now(),'status' => 'active']);
        return redirect('/dashboard')->with('success','Selamat Datang')->with('user', $request->username);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}