<?php

namespace App\Gateway\ApiService\Shapes;

use App\Gateway\ApiService\Dto\CircleDto;
use App\Gateway\ApiService\Response\AbstractResponse;
use App\Gateway\ApiService\Response\CircleResponse;

class Circle implements ShapeInterface
{

    private CircleDto $circleDto;

    public function __construct(CircleDto $circleDto)
    {
        $this->circleDto = $circleDto;
    }

    public function area() : AbstractResponse
    {
        $area = pi() * pow($this->circleDto->getRadius(), 2);
        $response = new CircleResponse();
        $response->setSurface($area);
        $response->setRadius($this->circleDto->getRadius());

        return $response;
    }
}