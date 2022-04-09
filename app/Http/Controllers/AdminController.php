<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengunjung;
use App\Models\Tracking;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Cache;

class AdminController extends Controller
{
    public function index()
    {
        $trackins=Tracking::all();
        $totalTracking = $trackins->where('pplg', '<>', '', 'and')->count() +
        $trackins->where('dkv', '<>', '', 'and')->count() +
        $trackins->where('tjkt', '<>', '', 'and')->count() +
        $trackins->where('pmn', '<>', '', 'and')->count() +
        $trackins->where('hotel', '<>', '', 'and')->count() +
        $trackins->where('mplb', '<>', '', 'and')->count();
        $pengunjungs=Pengunjung::all();
        $pengunjungtotal = $pengunjungs->count();
        $pengunjungtoday = Pengunjung::whereDate('created_at', Carbon::today())->count();
        $pengunjungfrom = Pengunjung::select('asal_instansi')->distinct()->count('asal_instansi');
        return view('admin.dashboard', compact('pengunjungs','pengunjungtotal','pengunjungtoday','pengunjungfrom','trackins','totalTracking'));
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->intended('/admin');
        }
        return view('login');
    }
    public function auth(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        $request->session()
        ->flash('message', 'Login gagal, mohon periksa kembali username dan password yang digunakan.');
        $message = $request->session()->get('message',null);
        return redirect('/login')->with('message', $message);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

 	public function delete($id){
        Pengunjung::destroy($id);
        Tracking::where('pengunjung_id',$id)->delete();
        return redirect('/pengunjung')->with('succses', 'Pengunjung Berhasil Dihapus');
    }
}
