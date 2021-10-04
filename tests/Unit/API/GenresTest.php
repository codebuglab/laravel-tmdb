<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\GenreResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class GenresTest extends TestCase
{

    use GenreResponse;

    public function test_get_movie_list()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->genreRepository->shouldReceive([
            'movieList' => $mockedTmdb->genreRepository,
            'get' => $this->mockGetMovieListResponse()
        ]);

        $this->assertEquals($this->mockGetMovieListResponse(), $mockedTmdb->tmdb->genres()->movieList()->get());
    }

    public function test_get_tv_list()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->genreRepository->shouldReceive([
            'tvList' => $mockedTmdb->genreRepository,
            'get' => $this->mockGetTvListResponse()
        ]);

        $this->assertEquals($this->mockGetTvListResponse(), $mockedTmdb->tmdb->genres()->tvList()->get());
    }
}
