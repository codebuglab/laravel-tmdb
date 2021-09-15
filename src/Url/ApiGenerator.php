<?php

namespace CodeBugLab\Tmdb\Url;

class ApiGenerator implements ApiGeneratorInterface
{
    public $url;

    protected $apiUrl;

    protected $apiKey;

    public function __construct(string $apiUrl, string $apiKey)
    {
        $this->apiUrl = $apiUrl;

        $this->apiKey = $apiKey;
    }

    public function api($path)
    {
        $this->url = $this->apiUrl . $path . "?api_key=" . $this->apiKey;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
