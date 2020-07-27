<?php

namespace App\Http\Middleware;

use Closure;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->api_password != env('API_PASSWORD', 'XokyaCFJWhqfv59N9USmM8xjtG5doWmUc5C0iu')) {
            return response()->json(["message" => "Unauthneticated"]);
        }
        return $next($request);
    }
}