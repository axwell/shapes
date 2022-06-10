<?php

namespace App\Gateway\ApiService\Service;

use App\Gateway\ApiService\Shapes\ShapeInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ShapeCalculatorService
{

    public function calculateSurface(ShapeInterface $shape): JsonResponse
    {
        return new JsonResponse($shape->area());
    }

}
