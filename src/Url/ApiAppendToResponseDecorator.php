<?php

namespace CodeBugLab\Tmdb\Url;

/**
 * The class equivalent of query parameter append_to_response
 * @link https://developers.themoviedb.org/3/getting-started/append-to-response
 * @var array  $parameter
 * ex: ['videos','posters','casts']
 */
class ApiAppendToResponseDecorator extends ApiDecorator
{
    public function getUrl()
    {
        return $this->ApiGenerator->getUrl() . "&append_to_response=" . implode(",", $this->parameter);
    }
}
