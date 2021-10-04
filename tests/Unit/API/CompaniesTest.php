<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\CompaniesResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class CompaniesTest extends TestCase
{

    use CompaniesResponse;

    private $companyId = 1;

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->companyRepository->shouldReceive('details')->with($this->companyId)->andReturn($mockedTmdb->companyRepository);
        $mockedTmdb->companyRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->companies()->details($this->companyId)->get());
    }

    public function test_get_alternative_names()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->companyRepository->shouldReceive('images')->with($this->companyId)->andReturn($mockedTmdb->companyRepository);
        $mockedTmdb->companyRepository->shouldReceive('get')->andReturn($this->mockGetAlternativeNamesResponse());

        $this->assertEquals($this->mockGetAlternativeNamesResponse(), $mockedTmdb->tmdb->companies()->images($this->companyId)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->companyRepository->shouldReceive('transactions')->with($this->companyId)->andReturn($mockedTmdb->companyRepository);
        $mockedTmdb->companyRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->companies()->transactions($this->companyId)->get());
    }
}
