<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/genres/
 */
class GenreRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/genres/get-movie-list
     */
    public function movieList()
    {
        $this->apiGenerator->api("genre/movie/list");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/genres/get-tv-list
     */
    public function tvList()
    {
        $this->apiGenerator->api("genre/tv/list");
        return $this;
    }
}
