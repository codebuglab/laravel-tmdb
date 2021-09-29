<?php

namespace CodeBugLab\Tmdb\Factory;

use CodeBugLab\Tmdb\Exceptions\MethodException;
use CodeBugLab\Tmdb\Url\ApiAppendToResponseDecorator;
use CodeBugLab\Tmdb\Url\ApiGeneratorInterface;
use CodeBugLab\Tmdb\Url\ApiPageDecorator;
use CodeBugLab\Tmdb\Url\ApiQueryDecorator;

class ApiFactory implements ApiFactoryInterface
{
    public function getDecorator(string $method, $parameter, ApiGeneratorInterface $ApiGenerator)
    {
        switch ($method) {
            case "page":
                return new ApiPageDecorator($ApiGenerator, ...$parameter);
            case "appendToResponse":
                return new ApiAppendToResponseDecorator($ApiGenerator, ...$parameter);
            case "query":
                return new ApiQueryDecorator($ApiGenerator, ...$parameter);
            default:
                throw new MethodException("Method '{$method}' isn't supported");
        }
    }
}
