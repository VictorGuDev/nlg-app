<?php

namespace App\Services;

use App\Generator\PositionCostGenerator;

class PositionCostService
{
    public function __construct(PositionCostGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function getDescription(array $data): string
    {
        return $this->generator->generateDescription($data);
    }
}
