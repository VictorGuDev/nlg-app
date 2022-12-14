<?php

namespace App\Services;

use App\Generator\AbsenceGenerator;

class AbsenceService
{
    public function __construct(AbsenceGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function getDescription(): string
    {
        $data = [
            2016 => 1,
            2017 => 34,
            2018 => 20,
            2019 => 41,
            2020 => 20,
        ];
        return $this->generator->generateDescription($data);
    }
}
