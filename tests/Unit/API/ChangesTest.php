<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\ChangesResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class ChangesTest extends TestCase
{

    use ChangesResponse;

    public function test_get_movie_change_list()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->changeRepository->shouldReceive([
            'movieChangeList' => $mockedTmdb->changeRepository,
            'get' => $this->mockGetMovieChangesListResponse()
        ]);

        $this->assertEquals($this->mockGetMovieChangesListResponse(), $mockedTmdb->tmdb->changes()->movieChangeList()->get());
    }

    public function test_get_tv_change_list()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->changeRepository->shouldReceive([
            'tvChangeList' => $mockedTmdb->changeRepository,
            'get' => $this->mockGetTVChangesListResponse()
        ]);

        $this->assertEquals($this->mockGetTVChangesListResponse(), $mockedTmdb->tmdb->changes()->tvChangeList()->get());
    }

    public function test_get_person_change_list()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->changeRepository->shouldReceive([
            'personChangeList' => $mockedTmdb->changeRepository,
            'get' => $this->mockGetPersonChangesListResponse()
        ]);

        $this->assertEquals($this->mockGetPersonChangesListResponse(), $mockedTmdb->tmdb->changes()->personChangeList()->get());
    }
}
