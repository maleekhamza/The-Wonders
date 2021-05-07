<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
|-------------------------------------------------------------------------
| Turn On The Lights
|-------------------------------------------------------------------------
=======
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
>>>>>>> 64f66bdaa00a0adcc2ba66b9fee14d334c37cc6c
=======
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
=======

=======
34c37cc6c
>>>>>>> 18168c27b22c3d8ffd484a214e76f6ab68956c88
|
>>>>>>> 6ab70f8e89384e36465e4a44d883059b688d8b7c
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
