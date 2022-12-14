<?php

namespace App\Contracts;

interface AbsenceInterface
{
    public function getLastYear(array $absence): int;
    public function getLastYearValue(array $absence): int;
    public function getYearBeforeLastYear(array $absence): int;
    public function getYearBeforeLastYearValue(array $absence): int;
    public function compareDifference(array $absence): int;
    public function getDifferencePercentage(array $absence);
}
