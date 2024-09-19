<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Log the visitor's IP and User Agent
        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return $next($request);
    }
}
