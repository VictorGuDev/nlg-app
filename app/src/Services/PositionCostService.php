<?php

namespace App\Services;

use App\Generator\PositionCostGenerator;

class PositionCostService
{
    public function __construct(PositionCostGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function getDescription(): string
    {
        $data = [];
        return $this->generator->generateDescription($data);
    }
}
