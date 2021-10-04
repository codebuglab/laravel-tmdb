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
    public function details($personId): self
    {
        $this->apiGenerator->api("person/" . $personId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-changes
     */
    public function changes($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-movie-credits
     */
    public function movieCredits($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/movie_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-tv-credits
     */
    public function tvCredits($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/tv_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-combined-credits
     */
    public function combinedCredits($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/combined_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-external-ids
     */
    public function externalIds($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/external_ids");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-images
     */
    public function images($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-tagged-images
     */
    public function taggedImages($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/tagged_images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-translations
     */
    public function translations($personId): self
    {
        $this->apiGenerator->api("person/" . $personId . "/translations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-latest-person
     */
    public function latest(): self
    {
        $this->apiGenerator->api("person/latest");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/people/get-popular-people
     */
    public function popular(): self
    {
        $this->apiGenerator->api("person/popular");
        return $this;
    }
}
