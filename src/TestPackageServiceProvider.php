<?php namespace Afridlund85\TestPackage;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{

  public function register() {
    $this->mergeConfigFrom(
      __DIR__.'/config.php', 'test_package'
    );
  }

  public function boot() {
    $this->publishes([
      __DIR__.'/config.php' => config_path('test_package.php'),
    ]);

    $this->loadRoutesFrom(__DIR__.'/routes.php');

    $this->loadMigrationsFrom(__DIR__.'/migrations');

    $this->loadTranslationsFrom(__DIR__.'/translations', 'test_package');
    $this->publishes([
      __DIR__.'/translations' => resource_path('lang/vendor/test_package'),
    ]);

    $this->loadViewsFrom(__DIR__.'/views', 'test_package');
    $this->publishes([
      __DIR__.'/views' => resource_path('views/vendor/test_package'),
    ]);

  }
}
