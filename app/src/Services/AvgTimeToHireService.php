<?php

namespace App\Services;

use App\Generator\AvgTimeToHireGenerator;

class AvgTimeToHireService
{
    public function __construct(AvgTimeToHireGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function getDescription(array $data): string
    {
        return $this->generator->generateDescription($data);
    }
}
