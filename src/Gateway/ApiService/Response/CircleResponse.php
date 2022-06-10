<?php

namespace App\Gateway\ApiService\Response;

class CircleResponse extends AbstractResponse implements \JsonSerializable
{

    protected const TYPE = 'circle';

    protected float $surface;

    protected float $radius;

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    protected function setType()
    {
        $this->type = self::TYPE;
    }

    /**
     * @return float
     */
    public function getSurface(): float
    {
        return $this->surface;
    }

    /**
     * @param float $surface
     */
    public function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }

    public function jsonSerialize(): array
    {
        return [
            'type'    => $this->type,
            'surface' => $this->surface,
            'radius'  => $this->radius,
        ];
    }
}