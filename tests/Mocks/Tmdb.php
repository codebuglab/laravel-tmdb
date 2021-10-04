<?php

namespace CodeBugLab\Tmdb\Tests\Mocks;

use CodeBugLab\Tmdb\Tmdb as MainTmdb;
use Mockery;

class Tmdb
{

    public $certificationRepository;

    public $changeRepository;

    public $collectionRepository;

    public $companyRepository;

    public $configurationRepository;

    public $creditRepository;

    public $discoverRepository;

    public $genreRepository;

    public $listRepository;

    public $movieRepository;

    public $networkRepository;

    public $trendingRepository;

    public $personRepository;

    public $reviewRepository;

    public $searchRepository;

    public $tvRepository;

    public $tvSeasonRepository;

    public $tvEpisodeRepository;

    public $watchProviderRepository;

    public $tmdb;

    public function __construct()
    {
        $this->certificationRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\CertificationRepository');
        $this->changeRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\ChangeRepository');
        $this->collectionRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\CollectionRepository');
        $this->companyRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\CompanyRepository');
        $this->configurationRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\ConfigurationRepository');
        $this->creditRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\CreditRepository');
        $this->discoverRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\DiscoverRepository');
        $this->genreRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\GenreRepository');
        $this->listRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\ListRepository');
        $this->movieRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\MovieRepository');
        $this->networkRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\NetworkRepository');
        $this->trendingRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\TrendingRepository');
        $this->personRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\PersonRepository');
        $this->reviewRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\ReviewRepository');
        $this->searchRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\SearchRepository');
        $this->tvRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\TvRepository');
        $this->tvSeasonRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\TvSeasonRepository');
        $this->tvEpisodeRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\TvEpisodeRepository');
        $this->watchProviderRepository = Mockery::mock('CodeBugLab\Tmdb\Repository\WatchProviderRepository');

        $this->tmdb = new MainTmdb(
            $this->certificationRepository,
            $this->changeRepository,
            $this->collectionRepository,
            $this->companyRepository,
            $this->configurationRepository,
            $this->creditRepository,
            $this->discoverRepository,
            $this->genreRepository,
            $this->listRepository,
            $this->movieRepository,
            $this->networkRepository,
            $this->trendingRepository,
            $this->personRepository,
            $this->reviewRepository,
            $this->searchRepository,
            $this->tvRepository,
            $this->tvSeasonRepository,
            $this->tvEpisodeRepository,
            $this->watchProviderRepository,
        );
    }
}
