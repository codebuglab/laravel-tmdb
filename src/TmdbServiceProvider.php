<?php

namespace CodeBugLab\Tmdb;

use CodeBugLab\Tmdb\Url\ApiGenerator;
use Illuminate\Support\ServiceProvider;

class TmdbServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/tmdb.php',
            'tmdb'
        );

        $this->publishes([
            __DIR__ . '/config/tmdb.php' => config_path('tmdb.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->bind(ApiGenerator::class, function () {
            return new ApiGenerator(Tmdb::$url, config('tmdb.api_key'));
        });

        $this->app->bind('Tmdb', Tmdb::class);
    }
}
