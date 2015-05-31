<?php namespace App\Http\Middleware;

use Closure;
use Session;

class CustomerMiddleware {

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!Session::has('user')){
            return redirect('customer/signin');
        }

        return $next($request);
    }

}