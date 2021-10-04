<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/certifications/
 */
class CertificationRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/certifications/get-movie-certifications
     */
    public function movieCertifications(): self
    {
        $this->apiGenerator->api("certification/movie/list");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/certifications/get-tv-certifications
     */
    public function tvCertifications(): self
    {
        $this->apiGenerator->api("certification/tv/list");
        return $this;
    }
}
