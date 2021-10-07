<?php

namespace CodeBugLab\Tmdb\Tests\Unit;

use CodeBugLab\Tmdb\Repository\AbstractRepository;
use CodeBugLab\Tmdb\Tests\TestCase;
use CodeBugLab\Tmdb\Url\ApiAppendToResponseDecorator;
use CodeBugLab\Tmdb\Url\ApiGenerator;
use CodeBugLab\Tmdb\Url\ApiPageDecorator;
use CodeBugLab\Tmdb\Url\ApiQueryDecorator;

class UrlTest extends TestCase
{

    private $movieId = '54768';
    private $apiKey = '1548795a12542693247b26as6541d65b';
    private $pageNumber = '1';
    private $queryString = 'Jack+Reacher';
    private $appendString = ['videos','posters','casts'];

    public function test_normal_url_generator()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey);

        $url->api("movie/" . $this->movieId);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s",
                $this->movieId,
                $this->apiKey
            ),
            $url->getUrl()
        );
    }

    public function test_url_generator_with_page_decorator()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey);

        $url->api("movie/" . $this->movieId);

        $pageDecorator = new ApiPageDecorator($url, $this->pageNumber);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s&page=%s",
                $this->movieId,
                $this->apiKey,
                $this->pageNumber
            ),
            $pageDecorator->getUrl()
        );
    }

    public function test_url_generator_with_query_decorator()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey);

        $url->api("movie/" . $this->movieId);

        $queryDecorator = new ApiQueryDecorator($url, $this->queryString);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s&query=%s",
                $this->movieId,
                $this->apiKey,
                urlencode($this->queryString)
            ),
            $queryDecorator->getUrl()
        );
    }

    public function test_url_generator_with_append_to_response_decorator()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey);

        $url->api("movie/" . $this->movieId);

        $appendDecorator = new ApiAppendToResponseDecorator($url, $this->appendString);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s&append_to_response=%s",
                $this->movieId,
                $this->apiKey,
                implode(",", $this->appendString)
            ),
            $appendDecorator->getUrl()
        );
    }

    public function test_url_generator_with_mixed_decorators()
    {
        $url = new ApiGenerator(AbstractRepository::$apiUrl, $this->apiKey);

        $url->api("movie/" . $this->movieId);

        $pageDecorator = new ApiPageDecorator($url, $this->pageNumber);
        $appendDecorator = new ApiAppendToResponseDecorator($pageDecorator, $this->appendString);

        $this->assertEquals(
            sprintf(
                "https://api.themoviedb.org/3/movie/%s?api_key=%s&page=%s&append_to_response=%s",
                $this->movieId,
                $this->apiKey,
                $this->pageNumber,
                implode(",", $this->appendString)
            ),
            $appendDecorator->getUrl()
        );
    }
}
