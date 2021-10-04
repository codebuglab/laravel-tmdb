<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\CollectionsResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class CollectionsTest extends TestCase
{

    use CollectionsResponse;

    private $collectionId = 10;

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->collectionRepository->shouldReceive('details')->with($this->collectionId)->andReturn($mockedTmdb->collectionRepository);
        $mockedTmdb->collectionRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->collections()->details($this->collectionId)->get());
    }

    public function test_get_images()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->collectionRepository->shouldReceive('images')->with($this->collectionId)->andReturn($mockedTmdb->collectionRepository);
        $mockedTmdb->collectionRepository->shouldReceive('get')->andReturn($this->mockGetImagesResponse());

        $this->assertEquals($this->mockGetImagesResponse(), $mockedTmdb->tmdb->collections()->images($this->collectionId)->get());
    }

    public function test_get_transactions()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->collectionRepository->shouldReceive('transactions')->with($this->collectionId)->andReturn($mockedTmdb->collectionRepository);
        $mockedTmdb->collectionRepository->shouldReceive('get')->andReturn($this->mockGetTranslationsResponse());

        $this->assertEquals($this->mockGetTranslationsResponse(), $mockedTmdb->tmdb->collections()->transactions($this->collectionId)->get());
    }
}
