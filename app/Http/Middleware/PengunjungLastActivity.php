<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Cache;
use Carbon\Carbon;

class PengunjungLastActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('pengunjung_id')) {
            $expireTime = Carbon::now()->addMinute(1); // keep online for 1 min
            Cache::put('is_online'.$request->session()->get('pengunjung_id'), true, $expireTime);

            //Last Seen
            Pengunjung::where('id', $request->session()->get('pengunjung_id'))->update(['last_seen' => Carbon::now()]);
        }
        return $next($request);
    }
}
