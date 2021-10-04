<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\MovieResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class MoviesTest extends TestCase
{

    use MovieResponse;

    private $movieId = '54768';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('details')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->movies()->details($this->movieId)->get());
    }

    public function test_get_alternative_titles()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('alternativeTitles')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetAlternativeTitlesResponse());

        $this->assertEquals($this->mockGetAlternativeTitlesResponse(), $mockedTmdb->tmdb->movies()->alternativeTitles($this->movieId)->get());
    }

    public function test_get_changes()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('changes')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetChangesResponse());

        $this->assertEquals($this->mockGetChangesResponse(), $mockedTmdb->tmdb->movies()->changes($this->movieId)->get());
    }

    public function test_get_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('credits')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetCreditsResponse());

        $this->assertEquals($this->mockGetCreditsResponse(), $mockedTmdb->tmdb->movies()->credits($this->movieId)->get());
    }

    public function test_get_external_ids()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('externalIds')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetExternalIdsResponse());

        $this->assertEquals($this->mockGetExternalIdsResponse(), $mockedTmdb->tmdb->movies()->externalIds($this->movieId)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('images')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->movies()->images($this->movieId)->get());
    }

    public function test_get_keywords()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('keywords')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetKeywordsResponse());

        $this->assertEquals($this->mockGetKeywordsResponse(), $mockedTmdb->tmdb->movies()->keywords($this->movieId)->get());
    }

    public function test_get_lists()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('lists')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetListsResponse());

        $this->assertEquals($this->mockGetListsResponse(), $mockedTmdb->tmdb->movies()->lists($this->movieId)->get());
    }

    public function test_get_recommendations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('recommendations')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetRecommendationsResponse());

        $this->assertEquals($this->mockGetRecommendationsResponse(), $mockedTmdb->tmdb->movies()->recommendations($this->movieId)->get());
    }

    public function test_get_release_dates()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('releaseDates')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetReleaseDateResponse());

        $this->assertEquals($this->mockGetReleaseDateResponse(), $mockedTmdb->tmdb->movies()->releaseDates($this->movieId)->get());
    }

    public function test_get_reviews()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('reviews')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetReviewsResponse());

        $this->assertEquals($this->mockGetReviewsResponse(), $mockedTmdb->tmdb->movies()->reviews($this->movieId)->get());
    }

    public function test_get_similar()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('similar')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetSimilarResponse());

        $this->assertEquals($this->mockGetSimilarResponse(), $mockedTmdb->tmdb->movies()->similar($this->movieId)->get());
    }

    public function test_get_translations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('translations')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetTranslationsResponse());

        $this->assertEquals($this->mockGetTranslationsResponse(), $mockedTmdb->tmdb->movies()->translations($this->movieId)->get());
    }

    public function test_get_videos()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('videos')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetVideosResponse());

        $this->assertEquals($this->mockGetVideosResponse(), $mockedTmdb->tmdb->movies()->videos($this->movieId)->get());
    }

    public function test_get_watch_providers()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive('watchProviders')->with($this->movieId)->andReturn($mockedTmdb->movieRepository);
        $mockedTmdb->movieRepository->shouldReceive('get')->andReturn($this->mockGetWatchProvidersResponse());

        $this->assertEquals($this->mockGetWatchProvidersResponse(), $mockedTmdb->tmdb->movies()->watchProviders($this->movieId)->get());
    }

    public function test_get_latest()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive([
            'latest' => $mockedTmdb->movieRepository,
            'get' => $this->mockGetLatestResponse()
        ]);

        $this->assertEquals($this->mockGetLatestResponse(), $mockedTmdb->tmdb->movies()->latest()->get());
    }

    public function test_get_now_playing()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive([
            'nowPlaying' => $mockedTmdb->movieRepository,
            'get' => $this->mockGetNowPlayingResponse()
        ]);

        $this->assertEquals($this->mockGetNowPlayingResponse(), $mockedTmdb->tmdb->movies()->nowPlaying()->get());
    }

    public function test_get_popular()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive([
            'popular' => $mockedTmdb->movieRepository,
            'get' => $this->mockGetPopularResponse()
        ]);

        $this->assertEquals($this->mockGetPopularResponse(), $mockedTmdb->tmdb->movies()->popular()->get());
    }

    public function test_get_top_rated()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive([
            'topRated' => $mockedTmdb->movieRepository,
            'get' => $this->mockGetTopRatedResponse()
        ]);

        $this->assertEquals($this->mockGetTopRatedResponse(), $mockedTmdb->tmdb->movies()->topRated()->get());
    }

    public function test_get_upcoming()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->movieRepository->shouldReceive([
            'upcoming' => $mockedTmdb->movieRepository,
            'get' => $this->mockGetUpcomingResponse()
        ]);

        $this->assertEquals($this->mockGetUpcomingResponse(), $mockedTmdb->tmdb->movies()->upcoming()->get());
    }
}
