<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [ // Disable CSRF for these API routes
        'users', 
        'users/*',        
        'passengers',
        'passengers/*',
        'flights',
        'flights/*',
        'flights_passengers/',
        'login',
        'logout',
        'import_users',
    ];
}
