<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/people/
 */
class PersonRepository extends AbstractRepository
{

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-details
     */
    public function details($personId)
    {
        $this->apiGenerator->api("person/" . $personId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-changes
     */
    public function changes($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-movie-credits
     */
    public function movieCredits($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/movie_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-tv-credits
     */
    public function tvCredits($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/tv_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-combined-credits
     */
    public function combinedCredits($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/combined_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-external-ids
     */
    public function externalIds($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/external_ids");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-images
     */
    public function images($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-tagged-images
     */
    public function taggedImages($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/tagged_images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-translations
     */
    public function translations($personId)
    {
        $this->apiGenerator->api("person/" . $personId . "/translations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-latest-person
     */
    public function latest()
    {
        $this->apiGenerator->api("person/latest");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-popular-people
     */
    public function popular()
    {
        $this->apiGenerator->api("person/popular");
        return $this;
    }
}
