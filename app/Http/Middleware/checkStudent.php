<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Student; 
use Illuminate\Http\Request;
use Session; 
use App\Models\Permission;

class checkStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('userId') || Session::has('userId') == null) {
            return redirect()->route('studentlogOut');
        } else {
            $student = Student::where('status', 1)->where('id', currentUserId())->exists();
            if (!$student)
                return redirect()->route('studentlogOut');
            else
                return $next($request);
        }
        return redirect()->route('studentlogOut');
    }
}
