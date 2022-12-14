<?php

namespace App\Generator;

use App\Contracts\AbsenceInterface;

class AbsenceGenerator
{
    public function __construct(AbsenceInterface $absenceRepository)
    {
        $this->repo = $absenceRepository;
    }

    public function generateDescription(array $data): string
    {
        $msg = 'A total of ' . $this->repo->getLastYearValue($data) . ' employees left the organization in ' . $this->repo->getLastYear($data) . '.';
        $msg .= 'This is a significant decrease versus the previous year, being ' . abs($this->repo->compareDifference($data))
            . ' (' . $this->repo->getDifferencePercentage($data) . '%) ' . $this->getCompareWord($data) . ' the ' . $this->repo->getYearBeforeLastYear($data) . ' number of leavers of ' . $this->repo->getYearBeforeLastYearValue($data) . '.';
        return $msg;
    }

    public function getCompareWord($data)
    {
        if ($this->repo->compareDifference($data) >= 0) {
            return 'higher than';
        }

        if ($this->repo->compareDifference($data) >= 0) {
            return 'equal to';
        }

        if ($this->repo->compareDifference($data) < 0) {
            return 'lower than';
        }
    }

}
