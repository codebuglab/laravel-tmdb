<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/watch-providers/
 */
class WatchProviderRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/watch-providers/get-available-regions
     */
    public function availableRegions()
    {
        $this->apiGenerator->api("watch/providers/regions");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/watch-providers/get-movie-providers
     */
    public function movieProviders()
    {
        $this->apiGenerator->api("watch/providers/movie");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/watch-providers/get-tv-providers
     */
    public function tvProviders()
    {
        $this->apiGenerator->api("watch/providers/tv");
        return $this;
    }
}
