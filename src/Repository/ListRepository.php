<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/lists/
 */
class ListRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/lists/get-list-details
     */
    public function details($listId): self
    {
        $this->apiGenerator->api("list/" . $listId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/lists/check-item-status
     */
    public function itemStatus($listId): self
    {
        $this->apiGenerator->api("list/" . $listId . "/item_status");
        return $this;
    }
}
