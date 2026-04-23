<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccessTime
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $now = Carbon::now();
        $start = Carbon::createFromTime(7,0);
        $end = Carbon::createFromTime(8,0);

        if($now->lessThan($start) || $now->greaterThan($end)){
            return response('Xin lỗi, bạn chỉ có thể truy cập vào giờ hành chính từ 7h đến 8h',403);
        }
        return $next($request);
    }
}
