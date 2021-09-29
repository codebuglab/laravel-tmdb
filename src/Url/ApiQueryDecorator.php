<?php

namespace CodeBugLab\Tmdb\Url;

/**
 * The class return query parameter as set by user
 * This class will use more in search
 * @see https://developers.themoviedb.org/3/search
 */
class ApiQueryDecorator extends ApiDecorator
{
    public function getUrl()
    {
        return $this->ApiGenerator->getUrl() . "&query=" . urlencode($this->parameter);
    }
}
