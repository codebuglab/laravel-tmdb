<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\PersonResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class PeopleTest extends TestCase
{

    use PersonResponse;

    private $personId = '54768';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('details')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->people()->details($this->personId)->get());
    }

    public function test_get_changes()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('changes')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetChangesResponse());

        $this->assertEquals($this->mockGetChangesResponse(), $mockedTmdb->tmdb->people()->changes($this->personId)->get());
    }

    public function test_get_movie_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('movieCredits')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetMovieCreditsResponse());

        $this->assertEquals($this->mockGetMovieCreditsResponse(), $mockedTmdb->tmdb->people()->movieCredits($this->personId)->get());
    }

    public function test_get_tv_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('tvCredits')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetTvCreditsResponse());

        $this->assertEquals($this->mockGetTvCreditsResponse(), $mockedTmdb->tmdb->people()->tvCredits($this->personId)->get());
    }

    public function test_get_combined_credits()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('combinedCredits')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetCombinedCreditsResponse());

        $this->assertEquals($this->mockGetCombinedCreditsResponse(), $mockedTmdb->tmdb->people()->combinedCredits($this->personId)->get());
    }

    public function test_get_external_ids()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('externalIds')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetExternalIdsResponse());

        $this->assertEquals($this->mockGetExternalIdsResponse(), $mockedTmdb->tmdb->people()->externalIds($this->personId)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('images')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->people()->images($this->personId)->get());
    }

    public function test_get_tagged_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('taggedImages')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetTaggedImagesResponse());

        $this->assertEquals($this->mockGetTaggedImagesResponse(), $mockedTmdb->tmdb->people()->taggedImages($this->personId)->get());
    }

    public function test_get_translations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive('translations')->with($this->personId)->andReturn($mockedTmdb->personRepository);
        $mockedTmdb->personRepository->shouldReceive('get')->andReturn($this->mockGetTranslationsResponse());

        $this->assertEquals($this->mockGetTranslationsResponse(), $mockedTmdb->tmdb->people()->translations($this->personId)->get());
    }

    public function test_get_latest()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive([
            'latest' => $mockedTmdb->personRepository,
            'get' => $this->mockGetLatestResponse()
        ]);

        $this->assertEquals($this->mockGetLatestResponse(), $mockedTmdb->tmdb->people()->latest()->get());
    }

    public function test_get_popular()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->personRepository->shouldReceive([
            'popular' => $mockedTmdb->personRepository,
            'get' => $this->mockGetLatestResponse()
        ]);

        $this->assertEquals($this->mockGetLatestResponse(), $mockedTmdb->tmdb->people()->popular()->get());
    }
}
