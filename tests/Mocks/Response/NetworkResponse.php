<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait NetworkResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "headquarters": "Los Gatos, California",
            "homepage": "http://www.netflix.com",
            "id": 213,
            "logo_path": "/wwemzKWzjKYJFfCeiB57q3r4Bcm.png",
            "name": "Netflix",
            "origin_country": ""
          }', true);
    }

    public function mockGetAlternativeNamesResponse(): array
    {
        return json_decode('{
            "id": 174,
            "results": [
              {
                "name": "American Movie Classics",
                "type": "1984–2002"
              }
            ]
          }', true);
    }

    public function mockGetImagesResponse(): array
    {
        return json_decode('{
            "id": 213,
            "logos": [
              {
                "aspect_ratio": 3.73134328358209,
                "file_path": "/wwemzKWzjKYJFfCeiB57q3r4Bcm.png",
                "height": 268,
                "id": "5a7a61b5c3a36821980020ff",
                "file_type": ".svg",
                "vote_average": 0,
                "vote_count": 0,
                "width": 1000
              }
            ]
          }', true);
    }
}
