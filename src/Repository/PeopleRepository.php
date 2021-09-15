<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/people/
 */
class PeopleRepository extends AbstractRepository
{

    /**
     * @see https://developers.themoviedb.org/3/people/get-person-details
     */
    public function getDetails($personId)
    {
        $this->apiGenerator->api("person/" . $personId);
        return $this;
    }
}
