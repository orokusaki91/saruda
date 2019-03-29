<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class LangMiddleware {

    public function __construct(Application $app, Request $request) {
        $this->app = $app;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {

            $lang = session()->get('locale');

            if(in_array($lang, config()->get('app.locales'))) {
                $this->app->setLocale($lang);
            } else {
                $this->app->setLocale(config()->get('app.locale'));
            }

        }

        return $next($request);
    }

}