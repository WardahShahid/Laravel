<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Middleware groups...
    
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\CustomAuth:: class
        ],

        'api' => [
            // Middleware for API routes...
        ],
    ];

    // Route middleware...
    
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'admin' => \App\Http\Middleware\Admin::class,
        // Other route middleware definitions...
    ];
}
