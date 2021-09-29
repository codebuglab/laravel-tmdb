<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/tv
 */
class TvRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-details
     */
    public function details($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-aggregate-credits
     */
    public function aggregateCredits($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/aggregate_credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-alternative-titles
     */
    public function alternativeTitles($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/alternative_titles");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-changes
     */
    public function changes($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/changes");
        return $this;
    }


    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-content-ratings
     */
    public function contentRatings($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/content_ratings");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-credits
     */
    public function credits($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/credits");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-episode-groups
     */
    public function episodeGroups($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/episode_groups");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-external-ids
     */
    public function externalIds($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/external_ids");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-images
     */
    public function images($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-keywords
     */
    public function keywords($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/keywords");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-recommendations
     */
    public function recommendations($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/recommendations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-reviews
     */
    public function reviews($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/reviews");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-screened-theatrically
     */
    public function screenedTheatrically($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/screened_theatrically");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-similar-tv
     */
    public function similar($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/similar");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-translations
     */
    public function translations($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/translations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-videos
     */
    public function videos($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/videos");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-watch-providers
     */
    public function watchProviders($tvId)
    {
        $this->apiGenerator->api("tv/" . $tvId . "/watch/providers");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-latest-movie
     */
    public function latest()
    {
        $this->apiGenerator->api("tv/latest");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-airing-today
     */
    public function airingToday()
    {
        $this->apiGenerator->api("tv/airing_today");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-tv-on-the-air
     */
    public function onTheAir()
    {
        $this->apiGenerator->api("tv/on_the_air");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-popular-tv
     */
    public function popular()
    {
        $this->apiGenerator->api("tv/popular");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/tv/get-top-rated-tv
     */
    public function topRated()
    {
        $this->apiGenerator->api("tv/top_rated");
        return $this;
    }
}
