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
        $this->url = $this->url . "movie/" . $movieId . "?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-alternative-titles
     */
    public function alternativeTitles($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/alternative_titles?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-changes
     */
    public function changes($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/changes?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-credits
     */
    public function credits($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/credits?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-external-ids
     */
    public function externalIds($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/external_ids?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-images
     */
    public function images($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/images?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-keywords
     */
    public function keywords($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/keywords?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-lists
     */
    public function lists($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/lists?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-recommendations
     */
    public function recommendations($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/recommendations?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-release-dates
     */
    public function ReleaseDates($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/release_dates?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-reviews
     */
    public function reviews($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/reviews?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-similar-movies
     */
    public function similar($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/similar?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-translations
     */
    public function translations($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/translations?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-videos
     */
    public function videos($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/videos?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-watch-providers
     */
    public function watchProviders($movieId)
    {
        $this->url = $this->url . "movie/" . $movieId . "/watch/providers?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-latest-movie
     */
    public function latest()
    {
        $this->url = $this->url . "movie/latest?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-now-playing
     */
    public function nowPlaying()
    {
        $this->url = $this->url . "movie/now_playing?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-popular-movies
     */
    public function popular()
    {
        $this->url = $this->url . "movie/popular?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-top-rated-movies
     */
    public function topRated()
    {
        $this->url = $this->url . "movie/top_rated?api_key=" . $this->apiKey;
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-upcoming
     */
    public function upcoming()
    {
        $this->url = $this->url . "movie/upcoming?api_key=" . $this->apiKey;
        return $this;
    }
}
