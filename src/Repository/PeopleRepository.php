<?php

namespace CodeBugLab\Tmdb\Repository;

use CodeBugLab\Tmdb\Helper\CurlHelper;

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
        return json_decode(
            CurlHelper::get(
                sprintf(
                    "%sperson/%s?api_key=%s%s",
                    $this->url,
                    $personId,
                    $this->apiKey,
                    $this->appendToResponse
                ),
                $this->getHeaders()
            )
        );
    }
}
