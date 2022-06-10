<?php

namespace App\Http\Api\V1;

use App\Gateway\ApiService\Dto\TriangleDto;
use App\Gateway\ApiService\Service\ShapeCalculatorService;
use App\Gateway\ApiService\Shapes\Circle;
use App\Gateway\ApiService\Shapes\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{

    #[Route('/triangle/{a}/{b}/{c}', methods: ['GET', 'HEAD'])]
    /**
     * @Route
     */
    public function run(int $a, int $b, int $c, ShapeCalculatorService $areaCalculatorService): Response
    {
        $triangleDto = new TriangleDto();
        $triangleDto->setA($a);
        $triangleDto->setB($b);
        $triangleDto->setC($c);

        $shape = new Triangle($triangleDto);
        return $areaCalculatorService->calculateSurface($shape);
    }
}