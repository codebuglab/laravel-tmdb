<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait CompaniesResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "description": "",
            "headquarters": "San Francisco, California, United States",
            "homepage": "http://www.lucasfilm.com",
            "id": 1,
            "logo_path": "/o86DbpburjxrqAzEDhXZcyE8pDb.png",
            "name": "Lucasfilm",
            "origin_country": "US",
            "parent_company": null
          }', true);
    }

    public function mockGetAlternativeNamesResponse(): array
    {
        return json_decode('{
            "id": 3,
            "results": [
              {
                "name": "Pixar Animation Studios",
                "type": ""
              }
            ]
          }', true);
    }

    public function mockGetImagesResponse(): array
    {
        return json_decode('{
            "id": 1,
            "logos": [
              {
                "aspect_ratio": 2.97979797979798,
                "file_path": "/o86DbpburjxrqAzEDhXZcyE8pDb.png",
                "height": 99,
                "id": "5aa080d6c3a3683fea00011e",
                "file_type": ".svg",
                "vote_average": 0,
                "vote_count": 0,
                "width": 295
              }
            ]
          }', true);
    }
}
