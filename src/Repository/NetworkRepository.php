<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/networks
 */
class NetworkRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/networks/get-network-details
     */
    public function details($networkId)
    {
        $this->apiGenerator->api("network/" . $networkId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/networks/get-network-alternative-names
     */
    public function alternativeNames($networkId)
    {
        $this->apiGenerator->api("network/" . $networkId . "/alternative_names");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/networks/get-network-images
     */
    public function images($networkId)
    {
        $this->apiGenerator->api("network/" . $networkId . "/images");
        return $this;
    }
}
