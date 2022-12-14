<?php

namespace App\Repositories;

use App\Contracts\AbsenceInterface;

class AbsenceRepository implements AbsenceInterface
{
    public function getMax(array $absence): int
    {
        return max($absence);
    }

    public function getMin(array $absence): int
    {
        return max($absence);
    }

    public function getMaxAbsenceYear(array $absence): int
    {
        return array_search(max($absence), $absence);
    }

    public function getMinAbsenceYear(array $absence): int
    {
        return array_search(min($absence), $absence);
    }

    public function getFirstYear(array $absence): int
    {
        return array_key_first($absence);
    }

    public function getFirstYearValue(array $absence): int
    {
        return reset($absence);
    }

    public function getLastYear(array $absence): int
    {
        return array_key_last($absence);
    }

    public function getLastYearValue(array $absence): int
    {
        return end($absence);
    }
}
