<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait GenreResponse
{
    public function mockGetMovieListResponse(): array
    {
        return json_decode('{
            "genres": [
              {
                "id": 28,
                "name": "Action"
              }
            ]
          }', true);
    }

    public function mockGetTvListResponse(): array
    {
        return json_decode('{
            "genres": [
              {
                "id": 10759,
                "name": "Action & Adventure"
              }
            ]
          }', true);
    }
}
