<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\TrendingResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class TrendingTest extends TestCase
{

    use TrendingResponse;

    private $mediaType = 'all';
    private $timeWindow = 'day';

    public function test_get_trending()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->trendingRepository->shouldReceive('trending')->with($this->mediaType, $this->timeWindow)->andReturn($mockedTmdb->trendingRepository);
        $mockedTmdb->trendingRepository->shouldReceive('get')->andReturn($this->mockGetTrendingResponse());

        $this->assertEquals($this->mockGetTrendingResponse(), $mockedTmdb->tmdb->trending()->trending($this->mediaType, $this->timeWindow)->get());
    }
}
