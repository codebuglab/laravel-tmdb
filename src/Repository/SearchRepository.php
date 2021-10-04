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
    public function companies(): self
    {
        $this->apiGenerator->api("search/company");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-collections
     */
    public function collections(): self
    {
        $this->apiGenerator->api("search/collection");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-keywords
     */
    public function keywords(): self
    {
        $this->apiGenerator->api("search/keyword");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-movies
     */
    public function movies(): self
    {
        $this->apiGenerator->api("search/movie");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/multi-search
     */
    public function multi(): self
    {
        $this->apiGenerator->api("search/multi");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-people
     */
    public function people(): self
    {
        $this->apiGenerator->api("search/person");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/search/search-tv-shows
     */
    public function tvShows(): self
    {
        $this->apiGenerator->api("search/tv");
        return $this;
    }
}
