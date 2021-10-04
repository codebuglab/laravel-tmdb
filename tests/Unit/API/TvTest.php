<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\TvResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class TvTest extends TestCase
{

    use TvResponse;

    private $tvId = '58aa82f09251416f92006a3a';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('details')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->tv()->details($this->tvId)->get());
    }

    public function test_get_aggregate_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('aggregateCredits')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetAggregateCreditsResponse());

        $this->assertEquals($this->mockGetAggregateCreditsResponse(), $mockedTmdb->tmdb->tv()->aggregateCredits($this->tvId)->get());
    }

    public function test_get_alternative_titles()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('alternativeTitles')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetAlternativeTitlesResponse());

        $this->assertEquals($this->mockGetAlternativeTitlesResponse(), $mockedTmdb->tmdb->tv()->alternativeTitles($this->tvId)->get());
    }

    public function test_get_changes()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('changes')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetChangesResponse());

        $this->assertEquals($this->mockGetChangesResponse(), $mockedTmdb->tmdb->tv()->changes($this->tvId)->get());
    }

    public function test_get_content_ratings()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('contentRatings')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetContentRatingsResponse());

        $this->assertEquals($this->mockGetContentRatingsResponse(), $mockedTmdb->tmdb->tv()->contentRatings($this->tvId)->get());
    }

    public function test_get_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('credits')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetCreditsResponse());

        $this->assertEquals($this->mockGetCreditsResponse(), $mockedTmdb->tmdb->tv()->credits($this->tvId)->get());
    }

    public function test_get_episode_groups()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('episodeGroups')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetEpisodeGroupsResponse());

        $this->assertEquals($this->mockGetEpisodeGroupsResponse(), $mockedTmdb->tmdb->tv()->episodeGroups($this->tvId)->get());
    }

    public function test_get_external_ids()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('externalIds')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetExternalIdsResponse());

        $this->assertEquals($this->mockGetExternalIdsResponse(), $mockedTmdb->tmdb->tv()->externalIds($this->tvId)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('images')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->tv()->images($this->tvId)->get());
    }

    public function test_get_keywords()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('keywords')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetKeywordsResponse());

        $this->assertEquals($this->mockGetKeywordsResponse(), $mockedTmdb->tmdb->tv()->keywords($this->tvId)->get());
    }

    public function test_get_recommendations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('recommendations')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetRecommendationsResponse());

        $this->assertEquals($this->mockGetRecommendationsResponse(), $mockedTmdb->tmdb->tv()->recommendations($this->tvId)->get());
    }

    public function test_get_reviews()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('reviews')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetReviewsResponse());

        $this->assertEquals($this->mockGetReviewsResponse(), $mockedTmdb->tmdb->tv()->reviews($this->tvId)->get());
    }

    public function test_get_screened_theatrically()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('screenedTheatrically')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetScreenedTheatricallyResponse());

        $this->assertEquals($this->mockGetScreenedTheatricallyResponse(), $mockedTmdb->tmdb->tv()->screenedTheatrically($this->tvId)->get());
    }

    public function test_get_similar()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('similar')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetSimilarResponse());

        $this->assertEquals($this->mockGetSimilarResponse(), $mockedTmdb->tmdb->tv()->similar($this->tvId)->get());
    }

    public function test_get_translations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('translations')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetTranslationsResponse());

        $this->assertEquals($this->mockGetTranslationsResponse(), $mockedTmdb->tmdb->tv()->translations($this->tvId)->get());
    }

    public function test_get_videos()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('videos')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetVideosResponse());

        $this->assertEquals($this->mockGetVideosResponse(), $mockedTmdb->tmdb->tv()->videos($this->tvId)->get());
    }

    public function test_get_watch_providers()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive('watchProviders')->with($this->tvId)->andReturn($mockedTmdb->tvRepository);
        $mockedTmdb->tvRepository->shouldReceive('get')->andReturn($this->mockGetWatchProvidersResponse());

        $this->assertEquals($this->mockGetWatchProvidersResponse(), $mockedTmdb->tmdb->tv()->watchProviders($this->tvId)->get());
    }

    public function test_get_latest()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive([
            'latest' => $mockedTmdb->tvRepository,
            'get' => $this->mockGetLatestResponse()
        ]);

        $this->assertEquals($this->mockGetLatestResponse(), $mockedTmdb->tmdb->tv()->latest()->get());
    }

    public function test_get_airing_today()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive([
            'airingToday' => $mockedTmdb->tvRepository,
            'get' => $this->mockGetAiringTodayResponse()
        ]);

        $this->assertEquals($this->mockGetAiringTodayResponse(), $mockedTmdb->tmdb->tv()->airingToday()->get());
    }

    public function test_get_on_the_air()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive([
            'onTheAir' => $mockedTmdb->tvRepository,
            'get' => $this->mockGetOnTheAirResponse()
        ]);

        $this->assertEquals($this->mockGetOnTheAirResponse(), $mockedTmdb->tmdb->tv()->onTheAir()->get());
    }

    public function test_get_popular()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive([
            'popular' => $mockedTmdb->tvRepository,
            'get' => $this->mockGetPopularResponse()
        ]);

        $this->assertEquals($this->mockGetPopularResponse(), $mockedTmdb->tmdb->tv()->popular()->get());
    }

    public function test_get_top_rated()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->tvRepository->shouldReceive([
            'topRated' => $mockedTmdb->tvRepository,
            'get' => $this->mockGetTopRatedResponse()
        ]);

        $this->assertEquals($this->mockGetTopRatedResponse(), $mockedTmdb->tmdb->tv()->topRated()->get());
    }
}
