<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->exists('lang')){ // if the session variable does not exist
            $lang = substr(request()->server('HTTP_ACCEPT_LANGUAGE'), 0, 2); // get the language from the browser

            session()->put('lang', $lang); // set the default language
        }

        App::setLocale(session('lang')); // set the language

        return $next($request);
    }
}
