<?php

namespace CodeBugLab\Tmdb;

use CodeBugLab\Tmdb\Repository\MovieRepository;
use CodeBugLab\Tmdb\Repository\PeopleRepository;

class Tmdb
{
    private $movieRepository;

    private $peopleRepository;

    public function __construct(
        MovieRepository $movieRepository,
        PeopleRepository $peopleRepository
    ) {
        $this->movieRepository = $movieRepository;

        $this->peopleRepository = $peopleRepository;
    }

    public function movies()
    {
        return $this->movieRepository;
    }

    public function people()
    {
        return $this->peopleRepository;
    }
}
