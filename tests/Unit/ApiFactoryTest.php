<?php

namespace CodeBugLab\Tmdb\Tests\Unit;

use CodeBugLab\Tmdb\Exceptions\MethodException;
use CodeBugLab\Tmdb\Factory\ApiFactory;
use CodeBugLab\Tmdb\Repository\AbstractRepository;
use CodeBugLab\Tmdb\Tests\TestCase;
use CodeBugLab\Tmdb\Url\ApiGenerator;

class ApiFactoryTest extends TestCase
{

    private $movieId = '54768';
    private $apiKey = '1548795a12542693247b26as6541d65b';
    private $pageNumber = '1';
    private $queryString = 'Jack+Reacher';
    private $appendString = ['videos','posters','casts'];
    private $apiLanguage = 'en-US';

    public function test_api_factory_return_page_decorator()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey, $this->apiLanguage);

        $url->api("movie/" . $this->movieId);

        $apiFactory = (new ApiFactory())->getDecorator("page", [$this->pageNumber] , $url);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s&language=%s&page=%s",
                $this->movieId,
                $this->apiKey,
                $this->apiLanguage,
                $this->pageNumber
            ),
            $apiFactory->getUrl()
        );
    }

    public function test_api_factory_return_query_decorator()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey, $this->apiLanguage);

        $url->api("movie/" . $this->movieId);

        $apiFactory = (new ApiFactory())->getDecorator("query", [$this->queryString] , $url);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s&language=%s&query=%s",
                $this->movieId,
                $this->apiKey,
                $this->apiLanguage,
                urlencode($this->queryString)
            ),
            $apiFactory->getUrl()
        );
    }


    public function test_api_factory_return_append_to_response_decorator()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey, $this->apiLanguage);

        $url->api("movie/" . $this->movieId);

        $apiFactory = (new ApiFactory())->getDecorator("appendToResponse", [$this->appendString] , $url);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s&language=%s&append_to_response=%s",
                $this->movieId,
                $this->apiKey,
                $this->apiLanguage,
                implode(",", $this->appendString)
            ),
            $apiFactory->getUrl()
        );
    }

    public function test_api_factory_throw_exception()
    {
        $this->expectException(MethodException::class);

        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey, $this->apiLanguage);

        $url->api("movie/" . $this->movieId);

        $apiFactory = (new ApiFactory())->getDecorator("wrongMethod", [$this->appendString] , $url);
    }
}
