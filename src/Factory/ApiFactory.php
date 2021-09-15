<?php

namespace CodeBugLab\Tmdb\Factory;

use CodeBugLab\Tmdb\Exceptions\MethodException;
use CodeBugLab\Tmdb\Url\ApiAppendToResponseDecorator;
use CodeBugLab\Tmdb\Url\ApiGeneratorInterface;
use CodeBugLab\Tmdb\Url\ApiPageDecorator;

class ApiFactory implements ApiFactoryInterface
{
    public function getDecorator(string $method, $parameter, ApiGeneratorInterface $ApiGenerator)
    {
        switch ($method) {
            case "page":
                return new ApiPageDecorator($ApiGenerator, ...$parameter);
            case "appendToResponse":
                return new ApiAppendToResponseDecorator($ApiGenerator, ...$parameter);
            default:
                throw new MethodException("Method '{$method}' isn't supported");
        }
    }
}
