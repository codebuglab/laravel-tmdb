<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\TvSeasonsResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class TvSeasonsTest extends TestCase
{

    use TvSeasonsResponse;

    private $tvId = '54768';
    private $seasonNumber = '1';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('details')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->tvSeasons()->details($this->tvId, $this->seasonNumber)->get());
    }

    public function test_get_aggregate_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('aggregateCredits')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetAggregateCreditsResponse());

        $this->assertEquals($this->mockGetAggregateCreditsResponse(), $mockedTmdb->tmdb->tvSeasons()->aggregateCredits($this->tvId, $this->seasonNumber)->get());
    }

    public function test_get_changes()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('changes')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetChangesResponse());

        $this->assertEquals($this->mockGetChangesResponse(), $mockedTmdb->tmdb->tvSeasons()->changes($this->tvId, $this->seasonNumber)->get());
    }

    public function test_get_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('credits')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetCreditsResponse());

        $this->assertEquals($this->mockGetCreditsResponse(), $mockedTmdb->tmdb->tvSeasons()->credits($this->tvId, $this->seasonNumber)->get());
    }

    public function test_get_external_ids()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('externalIds')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetExternalIdsResponse());

        $this->assertEquals($this->mockGetExternalIdsResponse(), $mockedTmdb->tmdb->tvSeasons()->externalIds($this->tvId, $this->seasonNumber)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('images')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->tvSeasons()->images($this->tvId, $this->seasonNumber)->get());
    }

    public function test_get_translations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('translations')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetTranslationsResponse());

        $this->assertEquals($this->mockGetTranslationsResponse(), $mockedTmdb->tmdb->tvSeasons()->translations($this->tvId, $this->seasonNumber)->get());
    }

    public function test_get_videos()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvSeasonRepository->shouldReceive('videos')->with($this->tvId, $this->seasonNumber)->andReturn($mockedTmdb->tvSeasonRepository);
        $mockedTmdb->tvSeasonRepository->shouldReceive('get')->andReturn($this->mockGetVideosResponse());

        $this->assertEquals($this->mockGetVideosResponse(), $mockedTmdb->tmdb->tvSeasons()->videos($this->tvId, $this->seasonNumber)->get());
    }
}
