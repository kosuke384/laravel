<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //後処理
        $response=$next($request);
        $content=$response->content();
        $pattern='/<middleware>(.*)<\/middleware>/i';
        $replace='<a href="http://$1">$1</a>';
        $content=preg_replace($pattern,$replace,$content);

        $response->setContent($content);


        //前処理
        /*
        $date=[
            ['name'=>'taro','email'=>'aaa@aaa.com'],
            ['name'=>'sato','email'=>'bbb@bbb.com'],
            ['name'=>'kato','email'=>'ccc@ccc.com'],
        ];
        $request->merge(['date'=>$date]);
        */
        return $response;
    }
}
