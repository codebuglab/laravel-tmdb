<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/reviews/
 */
class ReviewRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/reviews/get-review-details
     */
    public function details($reviewId)
    {
        $this->apiGenerator->api("review/{$reviewId}");
        return $this;
    }
}
