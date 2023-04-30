<?php
//
//namespace App\Http\Middleware;
//
//use Closure;
//
//class ApiTokenMiddleware
//{
//    public function handle($request, Closure $next)
//    {
//        if ($token = $request->cookie('api_token')) {
//            $request->headers->set('Authorization', 'Bearer ' . $token);
//        }
//        return $next($request);
//    }
//}
