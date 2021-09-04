<?php

namespace CodeBugLab\Tmdb\Repository;

use CodeBugLab\Tmdb\Helper\CurlHelper;

/**
 * @see https://developers.themoviedb.org/3/movies
 */
class MovieRepository extends AbstractRepository
{

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-details
     */
    public function getDetails($movieId)
    {
        return json_decode(
            CurlHelper::get(
                sprintf(
                    "%smovie/%s?api_key=%s%s",
                    $this->url,
                    $movieId,
                    $this->apiKey,
                    $this->appendToResponse
                ),
                $this->getHeaders()
            )
        );
    }
}
