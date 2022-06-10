<?php

namespace App\Http\Api\V1;

use App\Gateway\ApiService\Dto\CircleDto;
use App\Gateway\ApiService\Service\ShapeCalculatorService;
use App\Gateway\ApiService\Shapes\Circle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\JsonException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{

    #[Route('/circle/{radius}', methods: ['GET', 'HEAD'])]
    public function run(float $radius, ShapeCalculatorService $areaCalculatorService): Response
    {
            $circleDto = new CircleDto();
            $circleDto->setRadius($radius);

            $shape = new Circle($circleDto);
            return $areaCalculatorService->calculateSurface($shape);
    }
}