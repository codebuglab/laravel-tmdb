<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/tv-episodes
 */
class TvEpisodeRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-details
     */
    public function details($tvId, $seasonNumber, $episodeNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/episode/" . $episodeNumber);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-changes
     */
    public function changes($episodeNumber)
    {
        $this->apiGenerator->api("tv/episode/" . $episodeNumber . "/changes");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-credits
     */
    public function credits($tvId, $seasonNumber, $episodeNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/episode/" . $episodeNumber . "/credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-external_ids
     */
    public function externalIds($tvId, $seasonNumber, $episodeNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/episode/" . $episodeNumber . "/external_ids");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-images
     */
    public function images($tvId, $seasonNumber, $episodeNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/episode/" . $episodeNumber . "/images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-translations
     */
    public function translations($tvId, $seasonNumber, $episodeNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/episode/" . $episodeNumber . "/translations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-videos
     */
    public function videos($tvId, $seasonNumber, $episodeNumber)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/season/" . $seasonNumber . "/episode/" . $episodeNumber . "/videos");
        return $this;
    }
}
