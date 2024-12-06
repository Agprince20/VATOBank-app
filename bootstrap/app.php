<?php

use App\Http\Middleware\EnforceJsonResponse;
use App\Exceptions\ApiExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;


// use Illuminate\Support\Facades\Log;
// use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Str;
// use Throwable;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(EnforceJsonResponse::class);
        // $middleware->alias([
        //     'api' => \App\Http\Middleware\EnforceJsonResponse::class,
        // ]);
    })

   
    ->withExceptions(function (Exceptions $exceptions) {
        //    
    })->create();
