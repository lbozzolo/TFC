<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		//'App\Http\Middleware\VerifyCsrfToken',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth'          => 'App\Http\Middleware\Authenticate',
		'auth.basic'    => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest'         => 'App\Http\Middleware\RedirectIfAuthenticated',
        'company'       => '\App\Http\Middleware\Company',
        'changeDb'      => '\App\Http\Middleware\ChangeDB',
        'roles'         => '\App\Http\Middleware\Roles',
        'changeLanguaje'=> '\App\Http\Middleware\ChangeLanguaje',
        'isAdmin'       => '\App\Http\Middleware\IsAdmin',

        // API REST
        'changeDbWS'    => '\App\Http\Middleware\ChangeDbWS',
        'cors'          => '\App\Http\Middleware\Cors',
    ];


}
