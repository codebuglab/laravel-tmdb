<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\SearchResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class SearchTest extends TestCase
{
    use SearchResponse;

    public function test_get_companies()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->searchRepository->shouldReceive([
            'companies' => $mockedTmdb->searchRepository,
            'get' => $this->mockGetCompaniesResponse()
        ]);

        $this->assertEquals($this->mockGetCompaniesResponse(), $mockedTmdb->tmdb->search()->companies()->get());
    }

    public function test_get_collections()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->searchRepository->shouldReceive([
            'collections' => $mockedTmdb->searchRepository,
            'get' => $this->mockGetCollectionsResponse()
        ]);

        $this->assertEquals($this->mockGetCollectionsResponse(), $mockedTmdb->tmdb->search()->collections()->get());
    }

    public function test_get_keywords()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->searchRepository->shouldReceive([
            'keywords' => $mockedTmdb->searchRepository,
            'get' => $this->mockGetKeywordsResponse()
        ]);

        $this->assertEquals($this->mockGetKeywordsResponse(), $mockedTmdb->tmdb->search()->keywords()->get());
    }

    public function test_get_movies()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->searchRepository->shouldReceive([
            'movies' => $mockedTmdb->searchRepository,
            'get' => $this->mockGetMoviesResponse()
        ]);

        $this->assertEquals($this->mockGetMoviesResponse(), $mockedTmdb->tmdb->search()->movies()->get());
    }

    public function test_get_multi()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->searchRepository->shouldReceive([
            'multi' => $mockedTmdb->searchRepository,
            'get' => $this->mockGetMultiResponse()
        ]);

        $this->assertEquals($this->mockGetMultiResponse(), $mockedTmdb->tmdb->search()->multi()->get());
    }

    public function test_get_people()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->searchRepository->shouldReceive([
            'people' => $mockedTmdb->searchRepository,
            'get' => $this->mockGetPeopleResponse()
        ]);

        $this->assertEquals($this->mockGetPeopleResponse(), $mockedTmdb->tmdb->search()->people()->get());
    }

    public function test_get_tv_shows()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->searchRepository->shouldReceive([
            'tvShows' => $mockedTmdb->searchRepository,
            'get' => $this->mockGetTvShowsResponse()
        ]);

        $this->assertEquals($this->mockGetTvShowsResponse(), $mockedTmdb->tmdb->search()->tvShows()->get());
    }
}
