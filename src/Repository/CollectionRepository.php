<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/collections/
 */
class CollectionRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/collections/get-collection-details
     */
    public function details($collectionId)
    {
        $this->apiGenerator->api("collection/" . $collectionId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/collections/get-collection-images
     */
    public function images($collectionId)
    {
        $this->apiGenerator->api("collection/" . $collectionId . "/images");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/collections/get-collection-translations
     */
    public function translations($collectionId)
    {
        $this->apiGenerator->api("collection/" . $collectionId . "/translations");
        return $this;
    }
}
