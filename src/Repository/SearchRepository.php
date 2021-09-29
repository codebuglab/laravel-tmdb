<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/search
 */
class SearchRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/search/search-companies
     */
    public function companies()
    {
        $this->apiGenerator->api("search/company");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-collections
     */
    public function collections()
    {
        $this->apiGenerator->api("search/collection");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-keywords
     */
    public function keywords()
    {
        $this->apiGenerator->api("search/keyword");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-movies
     */
    public function movies()
    {
        $this->apiGenerator->api("search/movie");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/multi-search
     */
    public function multi()
    {
        $this->apiGenerator->api("search/multi");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-people
     */
    public function people()
    {
        $this->apiGenerator->api("search/person");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-tv-shows
     */
    public function tvShows()
    {
        $this->apiGenerator->api("search/tv");
        return $this;
    }
}
