<?php

namespace App\Gateway\ApiService\Shapes;

use App\Gateway\ApiService\Dto\TriangleDto;
use App\Gateway\ApiService\Error\AbstractError;
use App\Gateway\ApiService\Error\TriangleError;
use App\Gateway\ApiService\Response\AbstractResponse;
use App\Gateway\ApiService\Response\TriangleResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class Triangle implements ShapeInterface
{

    private TriangleDto $triangleDto;

    public function __construct(TriangleDto $triangleDto)
    {
        $this->triangleDto = $triangleDto;
    }

    public function area(): AbstractResponse|AbstractError
    {
        if (!$this->validate()) {
            $response = new TriangleError();
            $response->setError('A+B must be greater than C');

            return $response;
        }

        $semiPerimeter = ($this->triangleDto->getA() + $this->triangleDto->getB() + $this->triangleDto->getC()) / 2;
        $surface =  sqrt(
            $semiPerimeter
            * ($semiPerimeter - $this->triangleDto->getA())
            * ($semiPerimeter - $this->triangleDto->getB())
            * ($semiPerimeter - $this->triangleDto->getC())
        );

        $response = new TriangleResponse();
        $response->setSurface($surface);
        $response->setA($this->triangleDto->getA());
        $response->setB($this->triangleDto->getB());
        $response->setC($this->triangleDto->getC());

        return $response;
    }

    protected function validate(): bool
    {
        if ($this->triangleDto->getA() + $this->triangleDto->getB() > $this->triangleDto->getC()) {
            return true;
        }
        return false;
    }

}