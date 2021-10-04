<?php

namespace CodeBugLab\Tmdb\Tests\Unit\API;

use CodeBugLab\Tmdb\Tests\Mocks\Response\ConfigurationResponse;
use CodeBugLab\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use CodeBugLab\Tmdb\Tests\TestCase;

class ConfigurationTest extends TestCase
{

    use ConfigurationResponse;

    public function test_get_api_configuration()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->configurationRepository->shouldReceive([
            'apiConfiguration' => $mockedTmdb->configurationRepository,
            'get' => $this->mockGetApiConfigurationResponse()
        ]);

        $this->assertEquals($this->mockGetApiConfigurationResponse(), $mockedTmdb->tmdb->configuration()->apiConfiguration()->get());
    }

    public function test_get_countries()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->configurationRepository->shouldReceive([
            'countries' => $mockedTmdb->configurationRepository,
            'get' => $this->mockGetCountriesResponse()
        ]);

        $this->assertEquals($this->mockGetCountriesResponse(), $mockedTmdb->tmdb->configuration()->countries()->get());
    }

    public function test_get_jobs()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->configurationRepository->shouldReceive([
            'jobs' => $mockedTmdb->configurationRepository,
            'get' => $this->mockGetJobsResponse()
        ]);

        $this->assertEquals($this->mockGetJobsResponse(), $mockedTmdb->tmdb->configuration()->jobs()->get());
    }

    public function test_get_languages()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->configurationRepository->shouldReceive([
            'languages' => $mockedTmdb->configurationRepository,
            'get' => $this->mockGetLanguagesResponse()
        ]);

        $this->assertEquals($this->mockGetLanguagesResponse(), $mockedTmdb->tmdb->configuration()->languages()->get());
    }

    public function test_get_primary_translations()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->configurationRepository->shouldReceive([
            'primaryTranslations' => $mockedTmdb->configurationRepository,
            'get' => $this->mockGetPrimaryTranslationsResponse()
        ]);

        $this->assertEquals($this->mockGetPrimaryTranslationsResponse(), $mockedTmdb->tmdb->configuration()->primaryTranslations()->get());
    }

    public function test_get_timezones()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->configurationRepository->shouldReceive([
            'timezones' => $mockedTmdb->configurationRepository,
            'get' => $this->mockGetLanguagesResponse()
        ]);

        $this->assertEquals($this->mockGetLanguagesResponse(), $mockedTmdb->tmdb->configuration()->timezones()->get());
    }
}
