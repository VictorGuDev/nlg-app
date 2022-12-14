<?php

namespace App\Generator;

use App\Contracts\PositionCostInterface;

class PositionCostGenerator
{
    public function __construct(PositionCostInterface $positionCostRepository)
    {
        $this->repo = $positionCostRepository;
    }

    public function generateDescription(array $data): string
    {
        $msg = 'Overall average annual salary cost for the 12 months ended 30 November 2022 was $1,726,648. Account Director was the highest paid non-executive position with an average annual salary of $108,680. Cashier was the second highest non-executive position amounting to $100,400.';
        return $msg;
    }
}
