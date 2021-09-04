<?php

namespace CodeBugLab\Tmdb\Repository;

abstract class AbstractRepository
{

    protected $url;

    protected $apiKey;

    protected $appendToResponse;

    public function __construct(string $url, string $apiKey)
    {
        $this->url = $url;

        $this->apiKey = $apiKey;
    }

    /**
     * The function equivalent of query parameter append_to_response
     * @link https://developers.themoviedb.org/3/getting-started/append-to-response
     *
     * @var array  $appendToResponse
     * ex: ['videos','posters','casts']
     */
    public function appendToResponse(array $array)
    {
        $this->appendToResponse = "&append_to_response=" . implode(",", $array);
        return $this;
    }

    protected function getHeaders()
    {
        return [
            "Content-type: application/json;charset=utf-8"
        ];
    }
}
