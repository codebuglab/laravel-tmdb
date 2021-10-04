<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\WatchProvidersResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class WatchProvidersTest extends TestCase
{

    use WatchProvidersResponse;

    public function test_get_available_regions()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->watchProviderRepository->shouldReceive([
            'availableRegions' => $mockedTmdb->watchProviderRepository,
            'get' => $this->mockGetAvailableRegionsResponse()
        ]);

        $this->assertEquals($this->mockGetAvailableRegionsResponse(), $mockedTmdb->tmdb->watchProviders()->availableRegions()->get());
    }

    public function test_get_movie_providers()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->watchProviderRepository->shouldReceive([
            'movieProviders' => $mockedTmdb->watchProviderRepository,
            'get' => $this->mockGetMovieProvidersResponse()
        ]);

        $this->assertEquals($this->mockGetMovieProvidersResponse(), $mockedTmdb->tmdb->watchProviders()->movieProviders()->get());
    }

    public function test_get_tv_providers()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->watchProviderRepository->shouldReceive([
            'tvProviders' => $mockedTmdb->watchProviderRepository,
            'get' => $this->mockGetTvProvidersResponse()
        ]);

        $this->assertEquals($this->mockGetTvProvidersResponse(), $mockedTmdb->tmdb->watchProviders()->tvProviders()->get());
    }
}
