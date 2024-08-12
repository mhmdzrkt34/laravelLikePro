<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class fromFlutter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       

            if($request->headers->get("clientType") !== "flutter"){

                return response()->json([

                    "status"=>401,

                    "body"=>[

                        "message"=>"unauthorized"
                    ],

                    "type"=>"unauthorized"


                ],401);







            }

            
        
            
        return $next($request);
    }
}
