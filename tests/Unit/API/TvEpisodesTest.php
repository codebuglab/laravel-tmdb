<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\TvEpisodeResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class TvEpisodesTest extends TestCase
{

    use TvEpisodeResponse;

    private $tvId = '81356';
    private $seasonNumber = '1';
    private $episodeNumber = '1';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvEpisodeRepository->shouldReceive('details')->with($this->tvId, $this->seasonNumber, $this->episodeNumber)->andReturn($mockedTmdb->tvEpisodeRepository);
        $mockedTmdb->tvEpisodeRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->tvEpisodes()->details($this->tvId, $this->seasonNumber, $this->episodeNumber)->get());
    }

    public function test_get_changes()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvEpisodeRepository->shouldReceive('changes')->with($this->tvId, $this->seasonNumber, $this->episodeNumber)->andReturn($mockedTmdb->tvEpisodeRepository);
        $mockedTmdb->tvEpisodeRepository->shouldReceive('get')->andReturn($this->mockGetChangesResponse());

        $this->assertEquals($this->mockGetChangesResponse(), $mockedTmdb->tmdb->tvEpisodes()->changes($this->tvId, $this->seasonNumber, $this->episodeNumber)->get());
    }

    public function test_get_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvEpisodeRepository->shouldReceive('credits')->with($this->tvId, $this->seasonNumber, $this->episodeNumber)->andReturn($mockedTmdb->tvEpisodeRepository);
        $mockedTmdb->tvEpisodeRepository->shouldReceive('get')->andReturn($this->mockGetCreditsResponse());

        $this->assertEquals($this->mockGetCreditsResponse(), $mockedTmdb->tmdb->tvEpisodes()->credits($this->tvId, $this->seasonNumber, $this->episodeNumber)->get());
    }

    public function test_get_external_ids()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvEpisodeRepository->shouldReceive('externalIds')->with($this->tvId, $this->seasonNumber, $this->episodeNumber)->andReturn($mockedTmdb->tvEpisodeRepository);
        $mockedTmdb->tvEpisodeRepository->shouldReceive('get')->andReturn($this->mockGetExternalIdsResponse());

        $this->assertEquals($this->mockGetExternalIdsResponse(), $mockedTmdb->tmdb->tvEpisodes()->externalIds($this->tvId, $this->seasonNumber, $this->episodeNumber)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvEpisodeRepository->shouldReceive('images')->with($this->tvId, $this->seasonNumber, $this->episodeNumber)->andReturn($mockedTmdb->tvEpisodeRepository);
        $mockedTmdb->tvEpisodeRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->tvEpisodes()->images($this->tvId, $this->seasonNumber, $this->episodeNumber)->get());
    }

    public function test_get_translations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvEpisodeRepository->shouldReceive('translations')->with($this->tvId, $this->seasonNumber, $this->episodeNumber)->andReturn($mockedTmdb->tvEpisodeRepository);
        $mockedTmdb->tvEpisodeRepository->shouldReceive('get')->andReturn($this->mockGetTranslationsResponse());

        $this->assertEquals($this->mockGetTranslationsResponse(), $mockedTmdb->tmdb->tvEpisodes()->translations($this->tvId, $this->seasonNumber, $this->episodeNumber)->get());
    }

    public function test_get_videos()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvEpisodeRepository->shouldReceive('videos')->with($this->tvId, $this->seasonNumber, $this->episodeNumber)->andReturn($mockedTmdb->tvEpisodeRepository);
        $mockedTmdb->tvEpisodeRepository->shouldReceive('get')->andReturn($this->mockGetVideosResponse());

        $this->assertEquals($this->mockGetVideosResponse(), $mockedTmdb->tmdb->tvEpisodes()->videos($this->tvId, $this->seasonNumber, $this->episodeNumber)->get());
    }
}
