<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/discover/
 */
class DiscoverRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/discover/movie-discover
     */
    public function movieDiscover(): self
    {
        $this->apiGenerator->api("discover/movie");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/discover/tv-discover
     */
    public function tvDiscover(): self
    {
        $this->apiGenerator->api("discover/tv");
        return $this;
    }
}
