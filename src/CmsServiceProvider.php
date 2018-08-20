<?php

namespace Roocket2\Cms2;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider {

  public function register() {
    $this->app->bind('cms', function() {
      return new Cms();
    });

    $this->mergeConfigFrom(__DIR__ . '/Config/main.php', 'cms');
  }

  public function boot(Router $router) {
    require __DIR__ . '\Http\routes.php';
    $this->loadViewsFrom(__DIR__ . '/Views', 'cms');

    //$this->app['router']->middleware('admin', Admin::class);
    $router->aliasMiddleware('admin', '\Roocket2\Cms2\Http\Middleware\Admin');

    $this->publishes([
      __DIR__ . '/Config/main.php' => config_path('cms.php'),
      __DIR__ . '/Views' => base_path('resources/views/cms'),
      __DIR__ . '/Migrations' => database_path('/migrations')
    ], 'config');
  }
}