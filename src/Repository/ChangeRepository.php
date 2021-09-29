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
    public function movieChangeList()
    {
        $this->apiGenerator->api("movie/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/changes/get-tv-change-list
     */
    public function tvChangeList()
    {
        $this->apiGenerator->api("tv/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/changes/get-person-change-list
     */
    public function personChangeList()
    {
        $this->apiGenerator->api("person/changes");
        return $this;
    }
}
