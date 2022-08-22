<?php

namespace CodeBugLab\Tmdb\Url;

class ApiGenerator implements ApiGeneratorInterface
{
    public $url;

    protected $apiUrl;

    protected $apiKey;

    protected $apiLanguage;

    public function __construct(string $apiUrl, string $apiKey, string $apiLanguage)
    {
        $this->apiUrl = $apiUrl;

        $this->apiKey = $apiKey;

        $this->apiLanguage = $apiLanguage;
    }

    public function api($path)
    {
        $this->url = $this->apiUrl . $path . "?api_key=" . $this->apiKey . "&language=" . $this->apiLanguage;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
