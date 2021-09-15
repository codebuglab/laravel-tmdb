<?php

namespace CodeBugLab\Tmdb\Factory;

use CodeBugLab\Tmdb\Url\ApiGeneratorInterface;

interface ApiFactoryInterface
{
    public function getDecorator(string $method, $parameter, ApiGeneratorInterface $ApiGenerator);
}
