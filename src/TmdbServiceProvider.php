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
        $url = "https://api.themoviedb.org/3/";

        $apiKey = config('tmdb.api_key');

        $this->app->bind(ApiGenerator::class, function () use ($url, $apiKey) {
            return new ApiGenerator($url, $apiKey);
        });

        $this->app->bind('Tmdb', Tmdb::class);
    }
}
