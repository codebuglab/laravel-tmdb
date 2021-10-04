<?php

namespace CodeBugLab\Tmdb\Tests;

use CodeBugLab\Tmdb\TmdbServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app): array
    {
        return [
            TmdbServiceProvider::class,
        ];
    }

}
