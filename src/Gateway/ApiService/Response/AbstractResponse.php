<?php

namespace App\Gateway\ApiService\Response;

abstract class AbstractResponse
{
    protected string $type;

    public function __construct()
    {
        $this->setType();
    }

    abstract protected function setType();
}