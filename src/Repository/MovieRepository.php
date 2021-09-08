<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/movies
 */
class MovieRepository extends AbstractRepository
{

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-details
     */
    public function details($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-alternative-titles
     */
    public function alternativeTitles($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/alternative_titles?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-changes
     */
    public function changes($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/changes?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-credits
     */
    public function credits($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/credits?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-external-ids
     */
    public function externalIds($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/external_ids?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-images
     */
    public function images($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/images?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-keywords
     */
    public function keywords($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/keywords?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-lists
     */
    public function lists($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/lists?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-recommendations
     */
    public function recommendations($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/recommendations?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-release-dates
     */
    public function ReleaseDates($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/release_dates?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-reviews
     */
    public function reviews($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/reviews?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-similar-movies
     */
    public function similar($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/similar?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-translations
     */
    public function translations($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/translations?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-videos
     */
    public function videos($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/videos?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-watch-providers
     */
    public function watchProviders($movieId)
    {
        return $this->response(
            sprintf(
                "%smovie/%s/watch/providers?api_key=%s%s",
                $this->url,
                $movieId,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-latest-movie
     */
    public function latest()
    {
        return $this->response(
            sprintf(
                "%smovie/latest?api_key=%s%s",
                $this->url,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-now-playing
     */
    public function nowPlaying()
    {
        return $this->response(
            sprintf(
                "%smovie/now_playing?api_key=%s%s",
                $this->url,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-popular-movies
     */
    public function popular()
    {
        return $this->response(
            sprintf(
                "%smovie/popular?api_key=%s%s",
                $this->url,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-top-rated-movies
     */
    public function topRated()
    {
        return $this->response(
            sprintf(
                "%smovie/top_rated?api_key=%s%s",
                $this->url,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-upcoming
     */
    public function upcoming()
    {
        return $this->response(
            sprintf(
                "%smovie/upcoming?api_key=%s%s",
                $this->url,
                $this->apiKey,
                $this->appendToResponse
            )
        );
    }
}
