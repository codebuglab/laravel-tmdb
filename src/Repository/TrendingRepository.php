<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/trending/get-trending
 */
class TrendingRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/trending/get-trending
     * $mediaType options: all, movie, tv, person
     * $typeWIndow options: day, week
     */
    public function trending($mediaType, $typeWindow): self
    {
        $this->apiGenerator->api("trending/{$mediaType}/{$typeWindow}");
        return $this;
    }
}
