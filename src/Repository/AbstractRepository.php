<?php

namespace CodeBugLab\Tmdb\Repository;

use CodeBugLab\Tmdb\Factory\ApiFactory;
use CodeBugLab\Tmdb\Helper\CurlHelper;
use CodeBugLab\Tmdb\Url\ApiGenerator;

abstract class AbstractRepository
{
    public static $apiUrl = "https://api.themoviedb.org/3/";

    protected $apiGenerator;

    protected $apiDecorator = false;

    protected $appendToResponse;

    public function __construct(ApiGenerator $apiGenerator)
    {
        $this->apiGenerator = $apiGenerator;
    }

    /**
     * This magic method responsible for applying all tmdb query parameters
     * From the factory instead of making separated methods for every one
     * Like appendToResponse()
     * Read more about appendToResponse
     * @link https://developers.themoviedb.org/3/getting-started/append-to-response
     */
    public function __call($method, $args): self
    {
        $this->apiDecorator = (new ApiFactory())->getDecorator($method, $args, $this->apiGenerator);
        return $this;
    }

    public function get(): array
    {
        if ($this->apiDecorator) {
            $url = $this->apiDecorator->getUrl();

            $this->apiDecorator = false;

            return $this->response($url);
        }
        return $this->response($this->apiGenerator->getUrl());
    }


    protected function response($url): array
    {
        return json_decode(CurlHelper::get($url, $this->getHeaders()), true);
    }

    protected function getHeaders(): array
    {
        return [
            "Content-type: application/json;charset=utf-8"
        ];
    }
}
