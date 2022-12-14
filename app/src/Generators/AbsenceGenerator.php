<?php

namespace App\Generator;

use App\Repositories\AbsenceRepository;

class AbsenceGenerator
{
    public function __construct(AbsenceRepository $absenceRepository)
    {
        $this->repo = $absenceRepository;
    }

    public function generateDescription(array $data): string
    {
        $msg = 'A total of ' . $this->repo->getLastYearValue($data) . ' employees left the organisation in ' . $this->repo->getLastYear($data) . '.';
        $msg .= 'This is a significant decrease versus the previous year, being 21 (105%) lower than the 2019 number of leavers of 41.';
        return $msg;
    }

    public function getExtent(int $value): ?string
    {
        if ($value >= 30) {
            return 'significant';
        }
        if ($value <= 5) {
            return 'slightly';
        }
        return null;
    }

    public function getDirection(int $value)
    {

    }

}
