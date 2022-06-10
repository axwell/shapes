<?php

namespace App\Gateway\ApiService\Response;

class TriangleResponse extends AbstractResponse implements \JsonSerializable
{

    protected const TYPE = 'triangle';

    protected float $surface;

    protected float $a;

    protected float $b;

    protected float $c;


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

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     *
     * @return TriangleResponse
     */
    public function setA(float $a): TriangleResponse
    {
        $this->a = $a;

        return $this;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     *
     * @return TriangleResponse
     */
    public function setB(float $b): TriangleResponse
    {
        $this->b = $b;

        return $this;
    }

    /**
     * @return float
     */
    public function getC(): float
    {
        return $this->c;
    }

    /**
     * @param float $c
     *
     * @return TriangleResponse
     */
    public function setC(float $c): TriangleResponse
    {
        $this->c = $c;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'type'    => $this->type,
            'a'       => $this->a,
            'b'       => $this->b,
            'c'       => $this->c,
            'surface' => $this->surface,
        ];
    }
}