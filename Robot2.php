<?php

class Robot2 implements Robot
{
    public function __construct(protected $weight, protected $speed, protected $height)
    { }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }

    public function getHeight(): float
    {
        // TODO: Implement getHeight() method.
    }
}
