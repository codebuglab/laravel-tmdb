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
    public function details($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-alternative-titles
     */
    public function alternativeTitles($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/alternative_titles");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-changes
     */
    public function changes($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-credits
     */
    public function credits($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-external-ids
     */
    public function externalIds($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/external_ids");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-images
     */
    public function images($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-keywords
     */
    public function keywords($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/keywords");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-lists
     */
    public function lists($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/lists");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-recommendations
     */
    public function recommendations($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/recommendations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-release-dates
     */
    public function releaseDates($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/release_dates");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-reviews
     */
    public function reviews($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/reviews");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-similar-movies
     */
    public function similar($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/similar");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-translations
     */
    public function translations($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/translations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-videos
     */
    public function videos($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/videos");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-movie-watch-providers
     */
    public function watchProviders($movieId): self
    {
        $this->apiGenerator->api("movie/" . $movieId . "/watch/providers");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-latest-movie
     */
    public function latest(): self
    {
        $this->apiGenerator->api("movie/latest");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-now-playing
     */
    public function nowPlaying(): self
    {
        $this->apiGenerator->api("movie/now_playing");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-popular-movies
     */
    public function popular(): self
    {
        $this->apiGenerator->api("movie/popular");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-top-rated-movies
     */
    public function topRated(): self
    {
        $this->apiGenerator->api("movie/top_rated");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/movies/get-upcoming
     */
    public function upcoming(): self
    {
        $this->apiGenerator->api("movie/upcoming");
        return $this;
    }
}
