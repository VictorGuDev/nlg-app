<?php

namespace App\Services;

use App\Generator\AvgTimeToHireGenerator;

class AvgTimeToHireService
{
    public function __construct(AvgTimeToHireGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function getDescription(): string
    {
        $data = [];
        return $this->generator->generateDescription($data);
    }
}
