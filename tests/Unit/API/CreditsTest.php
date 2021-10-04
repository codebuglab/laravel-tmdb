<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\CreditsResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class CreditsTest extends TestCase
{

    use CreditsResponse;

    private $creditId = '52542282760ee313280017f9';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->creditRepository->shouldReceive('details')->with($this->creditId)->andReturn($mockedTmdb->creditRepository);
        $mockedTmdb->creditRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->credits()->details($this->creditId)->get());
    }
}
