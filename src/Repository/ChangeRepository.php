<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/changes/
 */
class ChangeRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/changes/get-movie-change-list
     */
    public function movieChangeList(): self
    {
        $this->apiGenerator->api("movie/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/changes/get-tv-change-list
     */
    public function tvChangeList(): self
    {
        $this->apiGenerator->api("tv/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/changes/get-person-change-list
     */
    public function personChangeList(): self
    {
        $this->apiGenerator->api("person/changes");
        return $this;
    }
}
