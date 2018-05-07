<?php

namespace Digitalmiig\Titulomiig;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class TitulomiigServiceProvider extends ServiceProvider
{
	
	 public function register()
	{
		$this->app->bind('titulomiig', function($app) {
			return new Titulomiig;

		});
	}

	public function boot()
	{
		require __DIR__ . '/Http/routes.php';


		$this->loadViewsFrom(__DIR__ . '/../views', 'titulomiig');

		$this->publishes([

			__DIR__ . '/migrations/2015_07_25_000000_create_usuario_table.php' => base_path('database/migrations/2015_07_25_000000_create_usuario_table.php'),

			]);


	}

}
