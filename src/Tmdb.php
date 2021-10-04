<?php

namespace CodeBugLab\Tmdb;

use CodeBugLab\Tmdb\Repository\CertificationRepository;
use CodeBugLab\Tmdb\Repository\ChangeRepository;
use CodeBugLab\Tmdb\Repository\CollectionRepository;
use CodeBugLab\Tmdb\Repository\CompanyRepository;
use CodeBugLab\Tmdb\Repository\ConfigurationRepository;
use CodeBugLab\Tmdb\Repository\CreditRepository;
use CodeBugLab\Tmdb\Repository\DiscoverRepository;
use CodeBugLab\Tmdb\Repository\GenreRepository;
use CodeBugLab\Tmdb\Repository\ListRepository;
use CodeBugLab\Tmdb\Repository\MovieRepository;
use CodeBugLab\Tmdb\Repository\NetworkRepository;
use CodeBugLab\Tmdb\Repository\PersonRepository;
use CodeBugLab\Tmdb\Repository\ReviewRepository;
use CodeBugLab\Tmdb\Repository\SearchRepository;
use CodeBugLab\Tmdb\Repository\TrendingRepository;
use CodeBugLab\Tmdb\Repository\TvEpisodeRepository;
use CodeBugLab\Tmdb\Repository\TvRepository;
use CodeBugLab\Tmdb\Repository\TvSeasonRepository;
use CodeBugLab\Tmdb\Repository\WatchProviderRepository;

class Tmdb
{
    private $certificationRepository;

    private $changeRepository;

    private $collectionRepository;

    private $companyRepository;

    private $configurationRepository;

    private $creditRepository;

    private $discoverRepository;

    private $genreRepository;

    private $listRepository;

    private $movieRepository;

    private $networkRepository;

    private $trendingRepository;

    private $personRepository;

    private $reviewRepository;

    private $searchRepository;

    private $tvRepository;

    private $tvSeasonRepository;

    private $tvEpisodeRepository;

    private $watchProviderRepository;

    public function __construct(
        CertificationRepository $certificationRepository,
        ChangeRepository $changeRepository,
        CollectionRepository $collectionRepository,
        CompanyRepository $companyRepository,
        ConfigurationRepository $configurationRepository,
        CreditRepository $creditRepository,
        DiscoverRepository $discoverRepository,
        GenreRepository $genreRepository,
        ListRepository $listRepository,
        MovieRepository $movieRepository,
        NetworkRepository $networkRepository,
        TrendingRepository $trendingRepository,
        PersonRepository $personRepository,
        ReviewRepository $reviewRepository,
        SearchRepository $searchRepository,
        TvRepository $tvRepository,
        TvSeasonRepository $tvSeasonRepository,
        TvEpisodeRepository $tvEpisodeRepository,
        WatchProviderRepository $watchProviderRepository
    ) {
        $this->certificationRepository = $certificationRepository;

        $this->changeRepository = $changeRepository;

        $this->collectionRepository = $collectionRepository;

        $this->companyRepository = $companyRepository;

        $this->configurationRepository = $configurationRepository;

        $this->creditRepository = $creditRepository;

        $this->discoverRepository = $discoverRepository;

        $this->genreRepository = $genreRepository;

        $this->listRepository = $listRepository;

        $this->movieRepository = $movieRepository;

        $this->networkRepository = $networkRepository;

        $this->trendingRepository = $trendingRepository;

        $this->personRepository = $personRepository;

        $this->reviewRepository = $reviewRepository;

        $this->searchRepository = $searchRepository;

        $this->tvRepository = $tvRepository;

        $this->tvSeasonRepository = $tvSeasonRepository;

        $this->tvEpisodeRepository = $tvEpisodeRepository;

        $this->watchProviderRepository = $watchProviderRepository;
    }

    public function certifications(): CertificationRepository
    {
        return $this->certificationRepository;
    }

    public function changes(): ChangeRepository
    {
        return $this->changeRepository;
    }

    public function collections(): CollectionRepository
    {
        return $this->collectionRepository;
    }

    public function companies(): CompanyRepository
    {
        return $this->companyRepository;
    }

    public function configuration(): ConfigurationRepository
    {
        return $this->configurationRepository;
    }

    public function credits(): CreditRepository
    {
        return $this->creditRepository;
    }

    public function discover(): DiscoverRepository
    {
        return $this->discoverRepository;
    }

    public function genres(): GenreRepository
    {
        return $this->genreRepository;
    }

    public function lists(): ListRepository
    {
        return $this->listRepository;
    }

    public function movies(): MovieRepository
    {
        return $this->movieRepository;
    }

    public function networks(): NetworkRepository
    {
        return $this->networkRepository;
    }

    public function trending(): TrendingRepository
    {
        return $this->trendingRepository;
    }

    public function people(): PersonRepository
    {
        return $this->personRepository;
    }

    public function reviews(): ReviewRepository
    {
        return $this->reviewRepository;
    }

    public function search(): SearchRepository
    {
        return $this->searchRepository;
    }

    public function tv(): TvRepository
    {
        return $this->tvRepository;
    }

    public function tvSeasons(): TvSeasonRepository
    {
        return $this->tvSeasonRepository;
    }

    public function tvEpisodes(): TvEpisodeRepository
    {
        return $this->tvEpisodeRepository;
    }

    public function watchProviders(): WatchProviderRepository
    {
        return $this->watchProviderRepository;
    }
}
