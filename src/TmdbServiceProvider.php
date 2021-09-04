<?php

namespace CodeBugLab\Tmdb;

use CodeBugLab\Tmdb\Repository\MovieRepository;
use CodeBugLab\Tmdb\Repository\PeopleRepository;
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

        $this->app->bind(MovieRepository::class, function () use ($url, $apiKey) {
            return new MovieRepository($url, $apiKey);
        });

        $this->app->bind(PeopleRepository::class, function () use ($url, $apiKey) {
            return new PeopleRepository($url, $apiKey);
        });

        $this->app->bind('Tmdb', Tmdb::class);
    }
}
