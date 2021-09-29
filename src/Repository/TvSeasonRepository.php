<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/tv-seasons
 */
class TvSeasonRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-details
     */
    public function details($tvId, $seasonNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-aggregate-credits
     */
    public function aggregateCredits($tvId, $seasonNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/aggregate_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-changes
     */
    public function changes($seasonId)
    {
        $this->apiGenerator->api("tv/season/" . $seasonId . "/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-credits
     */
    public function credits($tvId, $seasonNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-external-ids
     */
    public function externalIds($tvId, $seasonNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/external_ids");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-images
     */
    public function images($tvId, $seasonNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-translations
     */
    public function translations($tvId, $seasonNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/translations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-seasons/get-tv-season-videos
     */
    public function videos($tvId, $seasonNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/videos");
        return $this;
    }
}
