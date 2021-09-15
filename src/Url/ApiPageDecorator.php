<?php

namespace CodeBugLab\Tmdb\Url;

/**
 * The class return other pages from the response if exist
 * For example most popular movies have over than 400 pages
 * And every one have 20 records only
 * @var int $parameter
 * ex: 1 - 10 - 20
 */
class ApiPageDecorator extends ApiDecorator
{
    public function getUrl()
    {
        return $this->ApiGenerator->getUrl() . "&page=" . $this->parameter;
    }
}
