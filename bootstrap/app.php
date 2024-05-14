<?php

use App\Http\Middleware\ProtectMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\VerifyLoginStatus;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->web(append: [
        //     RedirectIfAuthenticated::class,
        // ]);

        $middleware->alias([
            'auth.redirect' =>    RedirectIfAuthenticated::class,
            'auth.verify' =>    VerifyLoginStatus::class,
            'user_access' => ProtectMiddleware::class

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
