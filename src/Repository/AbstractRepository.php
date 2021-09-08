<?php

namespace CodeBugLab\Tmdb\Repository;

use CodeBugLab\Tmdb\Helper\CurlHelper;

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
        $this->url = $this->url . "&append_to_response=" . implode(",", $array);
        return $this;
    }

    /**
     * The function return other pages from the response if exist
     * For example most popular movies have over than 400 pages
     * And every one have 20 records only
     *
     * @var array  $pageNumber
     * ex: 1 - 10 - 20
     */
    public function page(int $pageNumber)
    {
        $this->url = $this->url . "&page=" . $pageNumber;
        return $this;
    }

    public function get()
    {
        return $this->response($this->url);
    }


    protected function response($url)
    {
        return json_decode(CurlHelper::get($url, $this->getHeaders()));
    }

    protected function getHeaders()
    {
        return [
            "Content-type: application/json;charset=utf-8"
        ];
    }
}
