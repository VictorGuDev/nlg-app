<?php

namespace App\Generator;

use App\Contracts\AvgTimeToHireInterface;

class AvgTimeToHireGenerator
{
    public function __construct(AvgTimeToHireInterface $avgTimeToHireRepository)
    {
        $this->repo = $avgTimeToHireRepository;
    }

    public function generateDescription(array $data): string
    {
        $msg = 'The average time to hire for 30 November 2022 was 38 days. The application source for this month with the lowest average time to hire was Internal Talent Pool at 24 days. The second lowest was Seek at 35 days.';
        return $msg;
    }
}
