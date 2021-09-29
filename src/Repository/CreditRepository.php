<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/credits/
 */
class CreditRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/credits/get-credit-details
     */
    public function details($creditId)
    {
        $this->apiGenerator->api("credit/" . $creditId);
        return $this;
    }
}
