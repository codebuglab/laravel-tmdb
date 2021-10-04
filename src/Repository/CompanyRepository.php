<?php

namespace CodeBugLab\Tmdb\Repository;

/**
 * @see https://developers.themoviedb.org/3/companies/
 */
class CompanyRepository extends AbstractRepository
{
    /**
     * @see https://developers.themoviedb.org/3/companies/get-company-details
     */
    public function details($companyId): self
    {
        $this->apiGenerator->api("company/" . $companyId);
        return $this;
    }

    /**
     * @see https://developers.themoviedb.org/3/companies/get-company-alternative-names
     */
    public function alternativeNames($companyId): self
    {
        $this->apiGenerator->api("company/" . $companyId . "/alternative_names");
        return $this;
    }


    /**
     * @see https://developers.themoviedb.org/3/companies/get-company-images
     */
    public function images($companyId): self
    {
        $this->apiGenerator->api("company/" . $companyId . "/images");
        return $this;
    }
}
