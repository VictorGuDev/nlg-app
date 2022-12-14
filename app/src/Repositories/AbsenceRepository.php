<?php

namespace App\Repositories;

use App\Contracts\AbsenceInterface;

class AbsenceRepository implements AbsenceInterface
{
    public function getLastYear(array $absence): int
    {
        return array_key_last($absence);
    }

    public function getLastYearValue(array $absence): int
    {
        return end($absence);
    }

    public function getYearBeforeLastYear(array $absence): int
    {
        array_pop($absence);
        return $this->getLastYear($absence);
    }

    public function getYearBeforeLastYearValue(array $absence): int
    {
        array_pop($absence);
        return $this->getLastYearValue($absence);
    }

    public function compareDifference(array $absence): int
    {
        $lastYear = $this->getLastYearValue($absence);
        $yearBeforeLastYear = $this->getYearBeforeLastYearValue($absence);
        return $lastYear-$yearBeforeLastYear;
    }

    public function getDifferencePercentage(array $absence)
    {
        $diff = abs($this->compareDifference($absence));
        $yearBeforeLastYear = $this->getYearBeforeLastYearValue($absence);
        return round($diff/$yearBeforeLastYear * 100);
    }
}
