<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\NetworkResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class NetworksTest extends TestCase
{

    use NetworkResponse;

    private $networkId = '1';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->networkRepository->shouldReceive('details')->with($this->networkId)->andReturn($mockedTmdb->networkRepository);
        $mockedTmdb->networkRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->networks()->details($this->networkId)->get());
    }

    public function test_get_alternative_names()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->networkRepository->shouldReceive('alternativeNames')->with($this->networkId)->andReturn($mockedTmdb->networkRepository);
        $mockedTmdb->networkRepository->shouldReceive('get')->andReturn($this->mockGetAlternativeNamesResponse());

        $this->assertEquals($this->mockGetAlternativeNamesResponse(), $mockedTmdb->tmdb->networks()->alternativeNames($this->networkId)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->networkRepository->shouldReceive('images')->with($this->networkId)->andReturn($mockedTmdb->networkRepository);
        $mockedTmdb->networkRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->networks()->images($this->networkId)->get());
    }
}
