<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Exports\PengunjungsExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Routing\Redirector;
use Cache;

class PengunjungController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengunjungs=Pengunjung::latest()->paginate(10);
        return view('admin.pengunjung', compact('pengunjungs'));
    }

    public function active()
    {
        $pengunjungs = Pengunjung::all();
        $data = 0;
        foreach($pengunjungs as $pengunjung){
            if(Cache::has('is_online' . $pengunjung->id)){
                $data++;
            }
        }
        return response()->json($data);
    }

    public function trackingIndex($id)
    {
        $pengunjung = Pengunjung::where('id',$id)->first();
        $data = Tracking::where('pengunjung_id', $id)->first();
        return view('admin.tracking', compact('data','pengunjung'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function show(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengunjung $pengunjung)
    {
        //
    }

    public function export() 
    {
        return Excel::download(new PengunjungsExport, 'pengunjungs.xlsx');
    }

    public function dkv(Request $request){
        if($request->session()->has('pengunjung_id') == null){
            return redirect('/');
         }
        Tracking::updateOrCreate(['pengunjung_id' => $request->session()->get('pengunjung_id')],
        ['dkv' => Carbon::now()]);
        return view('rombel.dkv');
    }

    public function pplg(Request $request){
        if($request->session()->has('pengunjung_id') == null){
           return redirect('/');
        }
        Tracking::updateOrCreate(['pengunjung_id' => $request->session()->get('pengunjung_id')],
        ['pplg' => Carbon::now()]);
        return view('rombel.pplg');
    }

    public function tjkt(Request $request){
        if($request->session()->has('pengunjung_id') == null){
            return redirect('/');
         }
        Tracking::updateOrCreate(['pengunjung_id' => $request->session()->get('pengunjung_id')],
        ['tjkt' => Carbon::now()]);
        return view('rombel.tjkt');
    }

    public function pemasaran(Request $request){
        if($request->session()->has('pengunjung_id') == null){
            return redirect('/');
         }
        Tracking::updateOrCreate(['pengunjung_id' => $request->session()->get('pengunjung_id')],
        ['pmn' => Carbon::now()]);
        return view('rombel.pemasaran');
    }

    public function hotel(Request $request){
        if($request->session()->has('pengunjung_id') == null){
            return redirect('/');
         }
        Tracking::updateOrCreate(['pengunjung_id' => $request->session()->get('pengunjung_id')],
        ['hotel' => Carbon::now()]);
        return view('rombel.hotel');
    }

    public function kuliner(Request $request){
        if($request->session()->has('pengunjung_id') == null){
            return redirect('/');
         }
        Tracking::updateOrCreate(['pengunjung_id' => $request->session()->get('pengunjung_id')],
        ['kuliner' => Carbon::now()]);
        return view('rombel.kuliner');
    }

    public function mplb(Request $request){
        if($request->session()->has('pengunjung_id') == null){
            return redirect('/');
         }
        Tracking::updateOrCreate(['pengunjung_id' => $request->session()->get('pengunjung_id')],
        ['mplb' => Carbon::now()]);
        return view('rombel.mplb');
    }

    public function Chartjurusan(){
        $data = Tracking::all();
        return response()->json($data);
    }

}
