<?php

namespace App\Gateway\ApiService\Error;

class TriangleError extends  AbstractError implements \JsonSerializable
{

    private string $error;

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     *
     * @return TriangleError
     */
    public function setError(string $error): TriangleError
    {
        $this->error = $error;

        return $this;
    }

    public function jsonSerialize()
    {
       return [
           'error' => $this->error
       ];
    }
}