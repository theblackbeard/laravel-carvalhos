<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		//
		
		parent::boot($router);
/*
        $router->bind('work', function($id)
            {
                return \App\Work::published()->findOrFail($id);
            }
        );
*/
        $router->model('work', 'App\Work');
        $router->model('category', 'App\Category');
        $router->model('post', 'App\Post');
        $router->model('tavern', 'App\Tavern');
        $router->model('user', 'App\User');
        $router->model('about', 'App\About');
        $router->model('updates', 'App\Updates');
        $router->model('mail', 'App\MyMails');
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
