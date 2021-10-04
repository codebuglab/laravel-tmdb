<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/configuration
 */
class ConfigurationRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/configuration/get-api-configuration
     */
    public function apiConfiguration(): self
    {
        $this->apiGenerator->api("configuration");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/configuration/get-countries
     */
    public function countries(): self
    {
        $this->apiGenerator->api("configuration/countries");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/configuration/get-jobs
     */
    public function jobs(): self
    {
        $this->apiGenerator->api("configuration/jobs");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/configuration/get-languages
     */
    public function languages(): self
    {
        $this->apiGenerator->api("configuration/languages");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/configuration/get-primary-translations
     */
    public function primaryTranslations(): self
    {
        $this->apiGenerator->api("configuration/primary_translations");
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/configuration/get-timezones
     */
    public function timezones(): self
    {
        $this->apiGenerator->api("configuration/timezones");
        return $this;
    }
}
