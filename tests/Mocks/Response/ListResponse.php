<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait ListResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "created_by": "travisbell",
            "description": "This is pretty wicked.",
            "favorite_count": 0,
            "id": "50941077760ee35e1500000c",
            "items": [
              {
                "poster_path": "/fpemzjF623QVTe98pCVlwwtFC5N.jpg",
                "adult": false,
                "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                "release_date": "1999-10-12",
                "original_title": "Fight Club",
                "genre_ids": [
                  18
                ],
                "id": 550,
                "media_type": "movie",
                "original_language": "en",
                "title": "Fight Club",
                "backdrop_path": null,
                "popularity": 1.5,
                "vote_count": 3439,
                "video": false,
                "vote_average": 7.8
              }
            ],
            "item_count": 46,
            "iso_639_1": "en",
            "name": "The Marvel Universe",
            "poster_path": "/6KhhINGLbwzylPdRGqu4JxtzAJ3.jpg"
          }', true);
    }

    public function mockGetItemStatusResponse(): array
    {
        return json_decode('{
            "id": "50941077760ee35e1500000c",
            "item_present": true
          }', true);
    }
}
