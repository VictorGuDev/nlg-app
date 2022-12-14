<?php

namespace App\Services;

use App\Generator\AbsenceGenerator;

class AbsenceService
{
    public function __construct(AbsenceGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function getAbsenseDescription(array $data): string
    {
        return $this->generator->generateDescription($data);
    }
}
