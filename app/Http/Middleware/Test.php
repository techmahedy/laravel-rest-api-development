<?php

namespace App\Http\Middleware;

use Closure;

class Test
{

    public function handle($request, Closure $next)
    {   
        $ip = $request->ip();
        if($ip == '127.0.0.1'){
              
            try {
               return redirect('/');
            } catch (\Throwable $th) {
                throw new \Exception("your ip is correct");  
            }   
        }
        throw new \Exception("your ip is correct");  
        return $next($request);
    }
}
