<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $pengunjungs=Pengunjung::all();
        $pengunjungtotal = $pengunjungs->count();
        $pengunjungtoday = Pengunjung::whereDate('created_at', Carbon::today())->count();
        $pengunjungfrom = Pengunjung::select('asal_instansi')->distinct()->count('asal_instansi');
        return view('admin.dashboard', compact('pengunjungs','pengunjungtotal','pengunjungtoday','pengunjungfrom'));
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
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
 	public function delete($id){
      Pengunjung::destroy($id);
        return redirect('/admin')->with('succses', 'Suplayer Berhasil Dihapus');
    }
}
